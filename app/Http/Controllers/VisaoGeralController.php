<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Despesa;
use App\Renda;

class VisaoGeralController extends Controller
{
    public function visaoGeral(){
        $despesas = Despesa::all();
        $rendas = Renda::all();

        return view('site.visao-geral',compact('despesas', 'rendas'));
    }
}
