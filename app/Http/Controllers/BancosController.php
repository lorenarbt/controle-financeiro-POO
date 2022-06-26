<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Banco;
use App\TipoConta;

class BancosController extends Controller
{
    public function bancos(){
        $this->checkLogin();

        $bancos = Banco::select('*')->where('user_id',Auth::user()->id)->get();

        return view ('site.bancos',compact('bancos'));
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
}
