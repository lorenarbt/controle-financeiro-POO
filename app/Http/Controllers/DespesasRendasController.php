<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DespesasRendasController extends Controller
{
    public function despesasRendas(){
        return view ('site.despesas-renda');
    }

    public function viewInsertDesp(){
        return view ('insert.despesa');
    }
}
