<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Despesa;
use App\Prazo;

class DespesasRendasController extends Controller
{
    public function despesasRendas(){
        return view ('site.despesas-renda');
    }

    public function createDesp(){
        $deadlines = Prazo::all();

        return view('act.despesa',compact('deadlines'));
    }

    public function editDesp($id){
        $despesa = Despesa::find($id);
        $deadlines = Prazo::all();

        return view('act.despesa',compact('despesa','deadlines'));
    }

    public function insertDesp(Request $req){
        $data = [
            'desc' => $req->desc,
            'value' => str_replace(',', '.', $req->value),
            'fixed' => (bool)$req->fixed,
            'ini_month' => date('Y-m-d', strtotime(str_replace('/', '-', $req->ini_month))),
            'deadline' => $req->deadline
        ];

        Despesa::create($data);

        return redirect('/user/despesas-rendas');
    }

    public function updateDesp(Request $req, $id){
        $data = [
            'desc' => $req->desc,
            'value' => str_replace(',', '.', $req->value),
            'fixed' => (bool)$req->fixed,
            'ini_month' => date('Y-m-d', strtotime(str_replace('/', '-', $req->ini_month))),
            'deadline' => $req->deadline
        ];

        Despesa::find($id)->update($data);

        return redirect('/user/despesas-rendas');
    }

    public function deleteDesp($id){
        Despesa::find($id)->delete();

        return redirect('/user/despesas-rendas');
    }
}
