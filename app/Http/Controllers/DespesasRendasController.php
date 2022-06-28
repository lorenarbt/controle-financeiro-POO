<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Despesa;
use App\Renda;
use App\Prazo;
use App\Relevancia;
use App\Categoria;

class DespesasRendasController extends Controller
{
    private $user_id;

    public function __construct(){
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->user_id = Auth::user()->id;

            return $next($request);
        });
    }

    public function despesasRendas(){
        $this->checkLogin();

        $usuario    = User::select('*')->where('id',$this->user_id)->get();

        $despesas   = Despesa::join('categorias','categorias.id','despesas.type')
                            ->join('prazos','prazos.id','despesas.deadline')
                            ->select('despesas.*','categorias.desc as cat_desc','prazos.desc as praz_desc')
                            ->where('user_id',$this->user_id)
                            ->where(DB::raw("MONTH(ini_date)"),6)
                            ->orderBy('ini_date')
                            ->get();

        $rendas     = Renda::select('*')->where('user_id',$this->user_id)
                                        ->where(DB::raw("MONTH(ini_date)"),6)
                                        ->get();

        $despesa_tot = 0;
        $renda_tot = 0;

        foreach($despesas as $desp){
            $despesa_tot += $desp->value;
        }
        foreach($rendas as $rend){
            $renda_tot += $rend->value;
        }

        // query para cards gastos, realiza agrupamento de soma por mês
        $soma_despesa_ano            = DB::table("despesas")->select(DB::raw("YEAR(ini_date) as year"),DB::raw("(SUM(value)) as value"))
                                                                ->where('user_id',$this->user_id)
                                                                ->orderBy(DB::raw("YEAR(ini_date)"))
                                                                ->groupBy(DB::raw("YEAR(ini_date)"))
                                                                ->get();

        // query para cards gastos, realiza agrupamento de soma por mês
        $soma_pagamentos_ano          = DB::table("transferencias")->select(DB::raw("YEAR(date) as year"),DB::raw("(SUM(value)) as value"))
                                                                    ->where('user_id',$this->user_id)
                                                                    ->where('way',2)
                                                                    ->orderBy(DB::raw("YEAR(date)"))
                                                                    ->groupBy(DB::raw("YEAR(date)"))
                                                                    ->get();

        // query para gráfico de linha, realiza agrupamento de soma por mês
        $soma_rendas_ano             = DB::table("rendas")->select(DB::raw("YEAR(ini_date) as year"),DB::raw("(SUM(value)) as value"))
                                                            ->where('user_id',$this->user_id)
                                                            ->orderBy(DB::raw("YEAR(ini_date)"))
                                                            ->groupBy(DB::raw("YEAR(ini_date)"))
                                                            ->get();

        // query para gráfico de linha, realiza agrupamento de soma por mês
        $soma_recebimentos_ano      = DB::table("transferencias")->select(DB::raw("YEAR(date) as year"),DB::raw("(SUM(value)) as value"))
                                                                    ->where('user_id',$this->user_id)
                                                                    ->where('way',1)
                                                                    ->orderBy(DB::raw("YEAR(date)"))
                                                                    ->groupBy(DB::raw("YEAR(date)"))
                                                                    ->get();

        $saldo = 0;
        if(isset($soma_rendas_ano[0]) && isset($soma_recebimentos_ano[0]) && isset($soma_despesa_ano[0]) && isset($soma_pagamentos_ano[0]))
            $saldo = ($soma_rendas_ano[0]->value + $soma_recebimentos_ano[0]->value) - ($soma_despesa_ano[0]->value + $soma_pagamentos_ano[0]->value);

        return view('site.despesas-rendas',compact('usuario','despesas','rendas','despesa_tot','renda_tot','saldo'));
    }

    public function createDesp(){
        $this->checkLogin();

        $deadlines = Prazo::all();
        $types     = Categoria::all();
        $relevances= Relevancia::all();

        return view('act.despesa',compact('deadlines','types','relevances'));
    }

    public function editDesp($id){
        $this->checkLogin();

        $despesa = Despesa::find($id);
        $deadlines = Prazo::all();
        $types     = Categoria::all();
        $relevances= Relevancia::all();

        return view('act.despesa',compact('despesa','deadlines','types','relevances'));
    }

    public function insertDesp(Request $req){
        $this->checkLogin();

        $data = [
            'user_id' => $this->user_id,
            'desc' => $req->desc,
            'value' => str_replace(',', '.', $req->value),
            'fixed' => (bool)$req->fixed,
            'ini_date' => date('Y-m-d', strtotime(str_replace('/', '-', $req->ini_date))),
            'deadline' => $req->deadline,
            'relevance' => $req->relevance,
            'type' => $req->type,
        ];

        Despesa::create($data);

        return redirect('user/despesas-rendas');
    }

    public function updateDesp(Request $req, $id){
        $this->checkLogin();

        $data = [
            'user_id' => $this->user_id,
            'desc' => $req->desc,
            'value' => str_replace(',', '.', $req->value),
            'fixed' => (bool)$req->fixed,
            'ini_date' => date('Y-m-d', strtotime(str_replace('/', '-', $req->ini_date))),
            'deadline' => $req->deadline,
            'relevance' => $req->relevance,
            'type' => $req->type,
        ];

        Despesa::find($id)->update($data);

        return redirect('user/despesas-rendas');
    }

    public function deleteDesp($id){
        $this->checkLogin();

        Despesa::find($id)->delete();

        return redirect('user/despesas-rendas');
    }

    public function createRend(){
        $this->checkLogin();

        return view('act.renda');
    }

    public function editRend($id){
        $this->checkLogin();

        $renda = Renda::find($id);

        return view('act.renda',compact('renda'));
    }

    public function insertRend(Request $req){
        $this->checkLogin();

        $data = [
            'user_id' => $this->user_id,
            'desc' => $req->desc,
            'value' => str_replace(',', '.', $req->value),
            'ini_date' => date('Y-m-d', strtotime(str_replace('/', '-', $req->ini_date)))
        ];

        Renda::create($data);

        return redirect('user/despesas-rendas');
    }

    public function updateRend(Request $req, $id){
        $this->checkLogin();

        $data = [
            'user_id' => $this->user_id,
            'desc' => $req->desc,
            'value' => str_replace(',', '.', $req->value),
            'ini_date' => date('Y-m-d', strtotime(str_replace('/', '-', $req->ini_date))),
        ];

        Renda::find($id)->update($data);

        return redirect('user/despesas-rendas');
    }

    public function deleteRend($id){
        $this->checkLogin();

        Renda::find($id)->delete();

        return redirect('user/despesas-rendas');
    }
}
