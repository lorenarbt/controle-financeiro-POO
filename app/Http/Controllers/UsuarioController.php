<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    public function login(){
        return view('site.login');
    }

    public function cadastro(){
        return view('site.cadastro');
    }

    public function register(Request $request){
        // formatação dos dados que serão registrados
        $data = [
            'name' => $request->firstName . ' ' . $request->lastName,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'cpf' => $request->cpf,
            'tel' => $request->tel
        ];

        // Cadastro do usuário na base de dados
        Usuario::create($data);

        // Redirecionar para função de autenticação com $data como Request e realizar logon

        // Redireciona para visão geral
        return redirect('/');
    }

    public function autenticar(Request $request){
        // Regras de autenticação
        $rules =  [
            'email' => 'required|string',
            'password' => 'required|string',
        ];
        dd($rules, $request);

        // Autenticação de dados utilizados para login
        $request->validate($request,$rules);

        return redirect('/');
    }
}
