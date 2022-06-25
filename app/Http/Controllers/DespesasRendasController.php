<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Despesa;
use App\Renda;
use App\Prazo;

class DespesasRendasController extends Controller
{
    private $user_id;

    public function __construct(){
        $this->user_id = Auth::user()->id;
    }

    public function despesasRendas(){
        $this->checkLogin();

        // dd($this->user_id);

        $despesas = Despesa::all();
        // $rendas = Renda::all();

        $rendas = Renda::select('*')->where('user_id',Auth::user()->id)->get();
        // dd($rendas);

        return view ('site.despesas-rendas',compact('despesas','rendas'));
    }

    public function createDesp(){
        $this->checkLogin();

        $deadlines = Prazo::all();

        return view('act.despesa',compact('deadlines'));
    }

    public function editDesp($id){
        $this->checkLogin();

        $despesa = Despesa::find($id);
        $deadlines = Prazo::all();

        return view('act.despesa',compact('despesa','deadlines'));
    }

    public function insertDesp(Request $req){
        $this->checkLogin();

        $data = [
            'user_id' => Auth::user()->id,
            'desc' => $req->desc,
            'value' => str_replace(',', '.', $req->value),
            'fixed' => (bool)$req->fixed,
            'ini_month' => date('Y-m-d', strtotime(str_replace('/', '-', $req->ini_month))),
            'deadline' => $req->deadline
        ];

        Despesa::create($data);

        return redirect('user.despesas-rendas');
    }

    public function updateDesp(Request $req, $id){
        $this->checkLogin();

        $data = [
            'user_id' => Auth::user()->id,
            'desc' => $req->desc,
            'value' => str_replace(',', '.', $req->value),
            'fixed' => (bool)$req->fixed,
            'ini_month' => date('Y-m-d', strtotime(str_replace('/', '-', $req->ini_month))),
            'deadline' => $req->deadline
        ];

        Despesa::find($id)->update($data);

        return redirect('user.despesas-rendas');
    }

    public function deleteDesp($id){
        $this->checkLogin();

        Despesa::find($id)->delete();

        return redirect('user.despesas-rendas');
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
            'user_id' => Auth::user()->id,
            'desc' => $req->desc,
            'value' => str_replace(',', '.', $req->value),
            'ini_date' => date('Y-m-d', strtotime(str_replace('/', '-', $req->ini_date))),
            'end_date' => date('Y-m-d', strtotime(str_replace('/', '-', $req->end_date)))
        ];

        Renda::create($data);

        return redirect('user.despesas-rendas');
    }

    public function updateRend(Request $req, $id){
        $this->checkLogin();

        $data = [
            'user_id' => Auth::user()->id,
            'desc' => $req->desc,
            'value' => str_replace(',', '.', $req->value),
            'ini_date' => date('Y-m-d', strtotime(str_replace('/', '-', $req->ini_date))),
            'end_date' => date('Y-m-d', strtotime(str_replace('/', '-', $req->end_date)))
        ];

        Renda::find($id)->update($data);

        return redirect('user.despesas-rendas');
    }

    public function deleteRend($id){
        $this->checkLogin();

        Renda::find($id)->delete();

        return redirect('user.despesas-rendas');
    }
}
