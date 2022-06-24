<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use App\Usuario;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // -- Não se sabe se funciona na base dos controllers para ser herdado, precisa de testes, incluindo ao herdar de BaseController --
    // protected $model;
    // protected $pag = null;

    // public function __construct(Usuario $user)
    // {
    //   $this->model = $user;
    // }


    // -- métodos abstratos herdados de BaseController --

    // -- verifica se há usuário logado --
    protected function checkLogin(){
        if(! $this->checkUserActive())
            return redirect()->route('/');
    }

    // -- insere dados na tabela respectiva --
    protected function insert(Request $req){
        $this->checkLogin();

        try{
          $data = $req->all();

          if($this->model->create($data)){
            return redirect()->back()->with('msg', $this->mensagem(1));
          }

          return redirect()->back()->with('msg',$this->mensagem(2));

        }catch (QueryException $ex){
            return redirect()->back()->with('msg', $this->mensagem(3));

            // -- retornar mensagem de erro obtida da exception --
            // return $ex->getMessage();
            // return redirect()->back()->with('msg', $this->mensagem(3));
        }
    }
    // -- busca dados na tabela respectiva --
    protected function edit($id){
        $this->checkLogin();

        try{
          if($this->model::find($id)){
            return redirect()->back()->with('msg', $this->mensagem(1));
          }

          return redirect()->back()->with('msg',$this->mensagem(2));

        }catch (QueryException $ex){
            return redirect()->back()->with('msg', $this->mensagem(3));
        }
    }
    // -- atualiza dados na tabela respectiva --
    protected function update(Request $req, $id){
        $this->checkLogin();

        try{
          $data = $req->all();

          if($this->model::where('id',$data['id'])->update($data)){
            return redirect()->back()->with('msg', $this->mensagem(1));
          }

          return redirect()->back()->with('msg',$this->mensagem(2));

        }catch (QueryException $ex){
            return redirect()->back()->with('msg', $this->mensagem(3));

            // -- retornar mensagem de erro obtida da exception --
            // return $ex->getMessage();
            // return redirect()->back()->with('msg', $this->mensagem(3));
        }
    }
    // -- deleta dados na tabela respectiva --
    protected function delete($id){
        $this->checkLogin();

        try{
          if($this->model::find($id)->delete()){
            return redirect()->back()->with('msg', $this->mensagem(1));
          }

          return redirect()->back()->with('msg',$this->mensagem(2));

        }catch (QueryException $ex){
            return redirect()->back()->with('msg', $this->mensagem(3));

            // -- retornar mensagem de erro obtida da exception --
            // return $ex->getMessage();
            // return redirect()->back()->with('msg', $this->mensagem(3));
        }
    }


}
