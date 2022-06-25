<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Transferencia;
use App\Banco;
use App\MetodoPagamento;

class TransferenciasController extends Controller
{
    public function despesasRendas(){
        $bancos = Transferencia::all();

        return view ('site.bancos',compact('bancos'));
    }

    public function createDesp(){
        $tipoContas = TipoConta::all();

        return view('act.banco',compact('tipoContas'));
    }

    public function editDesp($id){
        $banco = Transferencia::find($id);
        $tipoContas = TipoConta::all();

        return view('act.banco',compact('banco','tipoContas'));
    }

    public function insertDesp(Request $req){
        $data = [
            'user_id' => $req->user_id,
            'desc' => $req->desc,
            'balance' => str_replace(',', '.', $req->balance),
            'type' => $req->type
        ];

        Transferencia::create($data);

        return redirect('user.bancos');
    }

    public function updateDesp(Request $req, $id){
        $data = [
            'user_id' => $req->user_id,
            'desc' => $req->desc,
            'balance' => str_replace(',', '.', $req->balance),
            'type' => $req->type
        ];

        Transferencia::find($id)->update($data);

        return redirect('user.bancos');
    }

    public function deleteDesp($id){
        Transferencia::find($id)->delete();

        return redirect('user.bancos');
    }
}
