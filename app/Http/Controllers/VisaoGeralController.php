<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Despesa;
use App\Renda;

class VisaoGeralController extends Controller
{
    public function visaoGeral(){
        $this->checkLogin();

        $despesas = Despesa::select('*')->where('user_id',Auth::user()->id)->get();
        $rendas = Renda::select('*')->where('user_id',Auth::user()->id)->get();

        $totais = [
            'ganhos' => [
                'mes_atual' => 2,
                'ano_atual' => 3,
            ],
            'gastos' => [
                'mes_atual' => 2,
                'ano_atual' => 3,
            ],
        ];

        $ganhos_mensais = "[1,2,5,3,8,4,9,7,5,5,3,6]";

        $relevancia_despesas = [
            '0' => 40,
            '1' => 60,
        ];
        // dd($ganhos_mensais, json_encode($ganhos_mensais));

        return view('site.visao-geral',compact('despesas', 'rendas', 'totais', 'ganhos_mensais', 'relevancia_despesas'));
    }
}
