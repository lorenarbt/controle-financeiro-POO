<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
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
        User::create($data);

        // Redireciona para login
        return redirect('/login');
    }

    public function autenticar(Request $request){
        // Regras de autenticação
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required'=>'O Email é obrigatório',
            'password.required'=>'A senha é obrigatória'
        ]);
        if (Auth::attempt(['email'=>$request->email, 'password'=> $request->password])){
            return redirect('/user/visao-geral');
        }else{
            return redirect()->back()->with('danger','E-mail ou senha inválida');
        }
    }

    public function logout(Request $request) {
        Auth::logout();

        return redirect('/login');
    }
}
