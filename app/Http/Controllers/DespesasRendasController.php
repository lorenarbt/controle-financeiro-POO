<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Despesa;

class DespesasRendasController extends Controller
{
    public function despesasRendas(){
        return view ('site.despesas-renda');
    }

    public function viewCreateDesp(){
        return view ('insert.despesa');
    }

    public function createDesp(Request $req){
        $data = [
            'user_id' => $req->user_id,
            'desc' => $req->desc,
            'value' => $req->value,
            'fixed' => $req->fixed
        ];
        $data += !$req->fixed ? ['ini_month' => $req->ini_month] : '';
        dd($req,$data);
        Despesa::create($req);
    }
}
