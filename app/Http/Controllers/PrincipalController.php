<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Despesa;
use App\Renda;

class PrincipalController extends Controller
{
    public function index () {
        $despesas = Despesa::all();
        $rendas = Renda::all();

        return view('site.index',compact('despesas','rendas'));
    }
}
