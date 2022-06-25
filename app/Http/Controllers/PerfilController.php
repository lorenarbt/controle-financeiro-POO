<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class PerfilController extends Controller
{
    // -- checar se herda de Controller ou BaseController, caso falso, declarar em todos --
    // protected $model;
    // protected $pag = null;

    // public function __construct(User $user)
    // {
    //   $this->model = $user;
    // }

    public function perfil(){
        $this->checkLogin();

        $user_id = Auth::user()->id;
        $data = $this->model::select('*')->find($user_id);

        return view('site.perfil', compact('data'));
    }
}
