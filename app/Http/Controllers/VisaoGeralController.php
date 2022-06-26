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

        $despesas = Despesa::select('*')->where('user_id',Auth::user()->id)->get();
        $rendas = Renda::select('*')->where('user_id',Auth::user()->id)->get();

        $totais = [
            'ganhos' => [
                'mes_atual' => 2,
                'ano_atual' => 3,
            ],
            'gastos' => [
                'mes_atual' => 2,
                'ano_atual' => 3,
            ],
        ];

        // algoritmo e cálculos para gráfico de linha, realiza agrupamento de soma por mês
        $soma_rendas_meses = DB::table("rendas")->select(DB::raw("MONTH(ini_date) as month"),DB::raw("(SUM(value)) as total_ganhos"))
                                                ->orderBy(DB::raw("MONTH(ini_date)"))
                                                ->groupBy(DB::raw("MONTH(ini_date)"))
                                                ->get();
        $array = array_fill(1, 12, NULL);

        for($i=0;$i<sizeof($soma_rendas_meses);$i++)
            $array[$soma_rendas_meses[$i]->month] = $soma_rendas_meses[$i]->total_ganhos;

        $ganhos_mensais = '[';
        for($i=1;$i<=12;$i++){
            ($i != 12) ? $ganhos_mensais .= $array[$i] != null ? $array[$i].',' : 'null,'
                       : $ganhos_mensais .= $array[$i] != null ? $array[$i] : 'null';
        }
        $ganhos_mensais .= ']';

        // algoritmo e cálculos para gráfico de rosca, realiza cálculo e agrupamento por relevância da despesa
        $porcentagem_relevancia_despesas = DB::table("rendas")->select(DB::raw("MONTH(ini_date) as month"),DB::raw("(SUM(value)) as total_ganhos"))
                                                              ->orderBy(DB::raw("MONTH(ini_date)"))
                                                              ->groupBy(DB::raw("MONTH(ini_date)"))
                                                              ->get();

        // $relevancia_despesas = '['.
        //                     40,
        //                     60
        //                         .']';
        $relevancia_despesas = '[40,60]';

        $categorias_despesas = [
            'alimentacao' => 20,
            'lazer' => 30,
            'saude' => 10,
            'educacao' => 5,
            'transporte' => 35
        ];




        return view('site.visao-geral',compact('despesas', 'rendas', 'totais', 'ganhos_mensais', 'relevancia_despesas', 'categorias_despesas'));
    }
}
