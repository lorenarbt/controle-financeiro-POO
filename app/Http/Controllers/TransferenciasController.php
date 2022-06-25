<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Transferencia;
use App\Banco;
use App\MetodoPagamento;

class TransferenciasController extends Controller
{
    public function transferencias(){
        $transferencias = Transferencia::all();
        $bancos = Banco::all();
        $metodoPag = MetodoPagamento::all();

        return view ('site.transferencias',compact('transferencias'));
    }

    public function createTransf(){
        $bancos = Banco::all();
        $metodoPag = MetodoPagamento::all();

        return view('act.transferencia',compact('metodoPag'));
    }

    public function editTransf($id){
        $banco = Transferencia::find($id);
        $metodoPag = MetodoPagamento::all();

        return view('act.transferencia',compact('banco','metodoPag'));
    }

    public function insertTransf(Request $req){
        $data = [
            'user_id' => $req->user_id,
            'desc' => $req->desc,
            'way' => $req->way,
            'value' => str_replace(',', '.', $req->balance),
            'bank_id' => $req->bank_id,
            'method' => $req->method
        ];

        Transferencia::create($data);

        return redirect('user.transferencias');
    }

    public function updateTransf(Request $req, $id){
        $data = [
            'user_id' => $req->user_id,
            'desc' => $req->desc,
            'way' => $req->way,
            'value' => str_replace(',', '.', $req->value),
            'bank_id' => $req->bank_id,
            'method' => $req->method
        ];

        Transferencia::find($id)->update($data);

        return redirect('user.transferencias');
    }

    public function deleteTransf($id){
        Transferencia::find($id)->delete();

        return redirect('user.transferencias');
    }
}
