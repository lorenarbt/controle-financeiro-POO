<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Despesa;
use App\Renda;

class VisaoGeralController extends Controller
{
    public function visaoGeral(){
        $this->checkLogin();

        $despesas   = Despesa::select('*')->where('user_id',Auth::user()->id)->get();
        $rendas     = Renda::select('*')->where('user_id',Auth::user()->id)->get();

        // query para cards gastos, realiza agrupamento de soma por mês
        $soma_despesas_meses            = DB::table("despesas")->select(DB::raw("MONTH(ini_date) as month"),DB::raw("(SUM(value)) as total_gastos"))
                                                                ->where('user_id',Auth::user()->id)
                                                                ->orderBy(DB::raw("MONTH(ini_date)"))
                                                                ->groupBy(DB::raw("MONTH(ini_date)"))
                                                                ->get();

        // query para cards gastos, realiza agrupamento de soma por mês
        $soma_pagamentos_meses          = DB::table("transferencias")->select(DB::raw("MONTH(date) as month"),DB::raw("(SUM(value)) as total_gastos"))
                                                                    ->where('user_id',Auth::user()->id)
                                                                    ->where('way',2)
                                                                    ->orderBy(DB::raw("MONTH(date)"))
                                                                    ->groupBy(DB::raw("MONTH(date)"))
                                                                    ->get();

        // query para gráfico de linha, realiza agrupamento de soma por mês
        $soma_rendas_meses              = DB::table("rendas")->select(DB::raw("MONTH(ini_date) as month"),DB::raw("(SUM(value)) as total_ganhos"))
                                                            ->where('user_id',Auth::user()->id)
                                                            ->orderBy(DB::raw("MONTH(ini_date)"))
                                                            ->groupBy(DB::raw("MONTH(ini_date)"))
                                                            ->get();

        // query para gráfico de linha, realiza agrupamento de soma por mês
        $soma_recebimentos_meses      = DB::table("transferencias")->select(DB::raw("MONTH(date) as month"),DB::raw("(SUM(value)) as total_ganhos"))
                                                                    ->where('user_id',Auth::user()->id)
                                                                    ->where('way',1)
                                                                    ->orderBy(DB::raw("MONTH(date)"))
                                                                    ->groupBy(DB::raw("MONTH(date)"))
                                                                    ->get();
        $array_ganhos = array_fill(1, 12, NULL);
        $array_gastos = array_fill(1, 12, NULL);

        $total_ganhos_ano = 0;
        $total_gastos_ano = 0;

        for($i=0;$i<sizeof($soma_rendas_meses);$i++){
            $array_ganhos[$soma_rendas_meses[$i]->month]    = $soma_rendas_meses[$i]->total_ganhos;
            $total_ganhos_ano                               += $soma_rendas_meses[$i]->total_ganhos;
        }

        for($i=0;$i<sizeof($soma_recebimentos_meses);$i++){
            $array_ganhos[$soma_recebimentos_meses[$i]->month]    += $soma_recebimentos_meses[$i]->total_ganhos;
            $total_ganhos_ano                                       += $soma_recebimentos_meses[$i]->total_ganhos;
        }

        for($i=0;$i<sizeof($soma_despesas_meses);$i++){
            $array_gastos[$soma_despesas_meses[$i]->month]    = $soma_despesas_meses[$i]->total_gastos;
            $total_gastos_ano                               += $soma_despesas_meses[$i]->total_gastos;
        }

        for($i=0;$i<sizeof($soma_pagamentos_meses);$i++){
            $array_gastos[$soma_pagamentos_meses[$i]->month]    += $soma_pagamentos_meses[$i]->total_gastos;
            $total_gastos_ano                                       += $soma_pagamentos_meses[$i]->total_gastos;
        }

        $ganhos_mensais = '[';
        for($i=1;$i<=12;$i++){
            ($i != 12) ? $ganhos_mensais .= $array_ganhos[$i] != null ? $array_ganhos[$i].','   : 'null,'
                       : $ganhos_mensais .= $array_ganhos[$i] != null ? $array_ganhos[$i]       : 'null';
        }
        $ganhos_mensais .= ']';

        // query para gráfico de rosca, realiza cálculo e agrupamento por relevância da despesa
        $relevancia_despesas        = DB::table("despesas")->join('relevancias','relevancias.id','despesas.relevance')
                                                            ->select('relevancias.desc','relevance',DB::raw("COUNT(relevance) as tot"))
                                                            ->where('despesas.user_id',Auth::user()->id)
                                                            ->orderBy('relevance')
                                                            ->groupBy('relevance')
                                                            ->get();

        // query para gráfico de rosca, realiza busca por total de relevância da despesa
        $tot_relevancias_despesas = DB::table("despesas")->select(DB::raw("COUNT(*) as tot"))->where('despesas.user_id',Auth::user()->id)->get();

        // query para gráfico de rosca, realiza cálculo e agrupamento por relevância da despesa
        $categoria_despesas         = DB::table("despesas")->join('categorias','categorias.id','despesas.type')
                                                            ->select('categorias.desc','type',DB::raw("COUNT(type) as tot"))
                                                            ->where('despesas.user_id',Auth::user()->id)
                                                            ->orderBy('type')
                                                            ->groupBy('type')
                                                            ->get();

        // query para gráfico de rosca, realiza busca por total de categoria da despesa
        $tot_categorias_despesas = DB::table("despesas")->select(DB::raw("COUNT(*) as tot"))->where('despesas.user_id',Auth::user()->id)->get();

        for($i=0;$i<sizeof($soma_rendas_meses);$i++){
            $array_ganhos[$soma_rendas_meses[$i]->month]    = $soma_rendas_meses[$i]->total_ganhos;
            $total_ganhos_ano                               += $soma_rendas_meses[$i]->total_ganhos;
        }

        for($i=0;$i<sizeof($soma_recebimentos_meses);$i++){
            $array_ganhos[$soma_recebimentos_meses[$i]->month]    += $soma_recebimentos_meses[$i]->total_ganhos;
            $total_ganhos_ano                                       += $soma_recebimentos_meses[$i]->total_ganhos;
        }

        // cálculos de procentagem para relevância das despesas
        $superfluo = $relevancia_despesas[0]->tot/$tot_relevancias_despesas[0]->tot*100;
        $essencial = $relevancia_despesas[1]->tot/$tot_relevancias_despesas[0]->tot*100;

        // cálculos de procentagem para categoria das despesas
        $alimentacao    = isset($categoria_despesas[0]) ? $categoria_despesas[0]->tot/$tot_categorias_despesas[0]->tot*100 : 0;
        $transporte     = isset($categoria_despesas[1]) ? $categoria_despesas[1]->tot/$tot_categorias_despesas[0]->tot*100 : 0;
        $lazer          = isset($categoria_despesas[2]) ? $categoria_despesas[2]->tot/$tot_categorias_despesas[0]->tot*100 : 0;
        $educacao       = isset($categoria_despesas[3]) ? $categoria_despesas[3]->tot/$tot_categorias_despesas[0]->tot*100 : 0;
        $saude          = isset($categoria_despesas[4]) ? $categoria_despesas[4]->tot/$tot_categorias_despesas[0]->tot*100 : 0;

        $relevancia_despesas = '['
                                .number_format($superfluo,2).','
                                .number_format($essencial,2)
                                .']';

        $categoria_despesas = [
                                'alimentacao'   => number_format($alimentacao,2),
                                'lazer'         => number_format($lazer,2),
                                'saude'         => number_format($saude,2),
                                'educacao'      => number_format($educacao,2),
                                'transporte'    => number_format($transporte,2)
                              ];

        $total_ganhos_mes = $soma_rendas_meses[6]->total_ganhos;
        $totais = [
            'ganhos' => [
                'mes_atual' => $array_ganhos[6],
                'ano_atual' => $total_ganhos_ano,
            ],
            'gastos' => [
                'mes_atual' => $array_gastos[6],
                'ano_atual' => $total_gastos_ano,
            ],
        ];

        return view('site.visao-geral',compact('despesas', 'rendas', 'totais', 'ganhos_mensais', 'relevancia_despesas', 'categoria_despesas'));
    }
}
