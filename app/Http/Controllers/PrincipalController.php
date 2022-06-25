<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Despesa;
use App\Renda;

class PrincipalController extends Controller
{
    public function index () {
        $this->checkLogin();
        
        return view('site.index');
    }
}
