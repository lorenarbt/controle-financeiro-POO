<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Banco;
use App\TipoConta;

class BancosController extends Controller
{
    public function despesasRendas(){
        $this->checkLogin();

        $bancos = Banco::select('*')->where('user_id',Auth::user()->id)->get();

        return view ('site.bancos',compact('bancos'));
    }

    public function createDesp(){
        $this->checkLogin();

        $tipoContas = TipoConta::all();

        return view('act.banco',compact('tipoContas'));
    }

    public function editDesp($id){
        $this->checkLogin();

        $banco = Banco::find($id);
        $tipoContas = TipoConta::all();

        return view('act.banco',compact('banco','tipoContas'));
    }

    public function insertDesp(Request $req){
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

    public function updateDesp(Request $req, $id){
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

    public function deleteDesp($id){
        $this->checkLogin();

        Banco::find($id)->delete();

        return redirect('user/bancos');
    }
}
