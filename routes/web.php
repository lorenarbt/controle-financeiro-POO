<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PrincipalController@index')->name('site.index');


Route::get('/login', 'LoginController@login')->name('site.login');


Route::get('/cadastro', 'CadastroController@cadastro')->name('site.cadastro');


Route::prefix('/user')->group(function() {

    Route::get('/visao-geral', 'VisaoGeralController@visaoGeral')->name('user.visaogeral');


    Route::get('/despesas-renda', 'DespesasRendasController@despesasRendas')->name('user.despesasrendas');

    Route::get('/perfil', 'PerfilController@perfil')->name('user.perfil');


    Route::get('/configuracoes', 'ConfiguracoesController@configuracoes')->name('user.configuracoes');
});



