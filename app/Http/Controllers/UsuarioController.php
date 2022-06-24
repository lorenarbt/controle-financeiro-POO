<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    public function viewlogin(){
        return view('site.login');
    }

    public function viewCadastro(){
        return view('site.cadastro');
    }

    public function createCadastro(Request $req){
        $data = [
            'name' => $req->firstName . ' ' . $req->lastName,
            'email' => $req->email,
            'password' => bcrypt($req->inputPassword),
            'cpf' => $req->cpf,
            'tel' => $req->tel
        ];

        Usuario::create($data);

        // chamar função pra autenticação automática usando email e password
        // então redirecionar para visao geral

        return redirect('/');
    }
}
