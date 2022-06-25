<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Despesa;
use App\Renda;

class VisaoGeralController extends Controller
{
    public function visaoGeral(){
        $despesas = Despesa::all();
        $rendas = Renda::all();

        return view('site.index');
    }
}
