<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function viewlogin(){
        return view('site.login');
    }

    public function viewCadastro(){
        return view('site.cadastro');
      }
}
