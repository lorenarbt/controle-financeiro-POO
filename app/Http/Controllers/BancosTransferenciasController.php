<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Banco;
use App\Transferencia;
use App\SentidoTransferencia;
use App\TipoConta;
use App\MetodoPagamento;

class BancosTransferenciasController extends Controller
{

    public function bancosTransferencias(){
        $this->checkLogin();

        $user_id = Auth::user()->id;

        $usuario            = User::select('*')->where('id',$user_id)->get();
        $bancos             = Banco::join('tipo_contas','tipo_contas.id','bancos.type')
                                    ->select('bancos.*','tipo_contas.desc as type')->where('user_id',$user_id)->get();
        $transferencias     = Transferencia::join('bancos','bancos.id','transferencias.bank_id')
                                            ->join('metodo_pagamentos','metodo_pagamentos.id','transferencias.method')
                                            ->join('sentido_transferencias','sentido_transferencias.id','transferencias.way')
                                            ->select('transferencias.*','sentido_transferencias.desc as way','metodo_pagamentos.desc as method','bancos.desc as bank')
                                            ->where('transferencias.user_id',$user_id)
                                            ->get();

        return view ('site.bancos-transfer',compact('usuario','bancos','transferencias'));
    }

    public function createBanc(){
        $this->checkLogin();

        $tipoContas = TipoConta::all();

        return view('act.banco',compact('tipoContas'));
    }

    public function editBanc($id){
        $this->checkLogin();

        $banco = Banco::find($id);
        $tipoContas = TipoConta::all();

        return view('act.banco',compact('banco','tipoContas'));
    }

    public function insertBanc(Request $req){
        $this->checkLogin();

        $data = [
            'user_id' => Auth::user()->id,
            'desc' => $req->desc,
            'balance' => str_replace(',', '.', $req->balance),
            'type' => $req->type
        ];

        Banco::create($data);

        return redirect('user/bancos');
    }

    public function updateBanc(Request $req, $id){
        $this->checkLogin();

        $data = [
            'user_id' => Auth::user()->id,
            'desc' => $req->desc,
            'balance' => str_replace(',', '.', $req->balance),
            'type' => $req->type
        ];

        Banco::find($id)->update($data);

        return redirect('user/bancos');
    }

    public function deleteBanc($id){
        $this->checkLogin();

        Banco::find($id)->delete();

        return redirect('user/bancos');
    }





    public function createTransf(){
        $this->checkLogin();

        $bancos = Banco::select('*')->where('user_id',Auth::user()->id)->get();
        $metodoPag = MetodoPagamento::all();

        return view('act.transferencia',compact('bancos','metodoPag'));
    }

    public function editTransf($id){
        $this->checkLogin();

        $bancos = Banco::select('*')->where('user_id',Auth::user()->id)->get();
        $transferencia = Transferencia::find($id);
        $metodoPag = MetodoPagamento::all();

        return view('act.transferencia',compact('bancos','transferencia','metodoPag'));
    }

    public function insertTransf(Request $req){
        $this->checkLogin();

        $data = [
            'user_id' => Auth::user()->id,
            'desc' => $req->desc,
            'way' => $req->way,
            'value' => str_replace(',', '.', $req->balance),
            'bank_id' => $req->bank_id,
            'method' => $req->method
        ];

        Transferencia::create($data);

        return redirect('user/transferencias');
    }

    public function updateTransf(Request $req, $id){
        $this->checkLogin();

        $data = [
            'user_id' => Auth::user()->id,
            'desc' => $req->desc,
            'way' => $req->way,
            'value' => str_replace(',', '.', $req->value),
            'bank_id' => $req->bank_id,
            'method' => $req->method
        ];

        Transferencia::find($id)->update($data);

        return redirect('user/transferencias');
    }

    public function deleteTransf($id){
        $this->checkLogin();

        Transferencia::find($id)->delete();

        return redirect('user/transferencias');
    }
}
