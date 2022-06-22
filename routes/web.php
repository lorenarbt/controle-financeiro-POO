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

// view inicial a ser carregada
Route::get('/', 'PrincipalController@index')->name('site.index');

// login
    // view de login
    Route::get('/login', 'LoginController@login')->name('site.login');
    // função de login
    // Route::get('/login', 'LoginController@login')->name('site.login');

// cadastro
    // view de cadastro
    Route::get('/cadastro', 'CadastroController@cadastro')->name('site.cadastro');
    // função de cadastro
    // Route::get('/cadastro', 'CadastroController@cadastro')->name('site.cadastro');


Route::prefix('/user')->group(function() {
    // dashboard geral dos dados
    Route::get('/visao-geral', 'VisaoGeralController@visaoGeral')->name('user.visaogeral');

    // perfil
    Route::get('/perfil', 'PerfilController@perfil')->name('user.perfil');

    // configurações
    Route::get('/configuracoes', 'ConfiguracoesController@configuracoes')->name('user.configuracoes');

    // dashboard de despesas e rendas
    Route::get('/despesas-renda', 'DespesasRendasController@despesasRendas')->name('user.despesas-rendas');

    // despesas
        // view de inserção de despesa
        Route::get('/view-create-despesa','DespesasRendasController@viewCreateDesp')->name('user.despesa');

        // view de edição de despesa
        Route::get('/view-edit-despesa', 'DespesasRendasController@viewEditDesp')->name('user.despesa');

        // função de inserção de despesa
        Route::post('/create_desp', 'DespesasRendasController@createDesp')->name('user.create.despesa');

        // função de edição de despesa
        Route::put('/edit_desp', 'DespesasRendasController@editDesp')->name('user.edit.despesa');

        // função de deleção de despesa
        Route::put('/delete_desp', 'DespesasRendasController@deleteDesp')->name('user.delete.despesa');

    // rendas
        // view de inserção de renda
        Route::get('/view-create-renda', 'DespesasRendasController@viewCreateRend')->name('user.renda');

        // view de edição de renda
        Route::get('/view-edit-renda', 'DespesasRendasController@viewEditRend')->name('user.renda');

        // função de inserção de renda
        Route::post('/create_rend', 'DespesasRendasController@createRend')->name('user.create.renda');

        // função de edição de renda
        Route::put('/edit_rend', 'DespesasRendasController@editRend')->name('user.edit.renda');

        // função de deleção de despesa
        Route::put('/delete_rend', 'DespesasRendasController@deleteRemd')->name('user.delete.rerndar');


    // dashboard dos bancos
    Route::get('/bancos', 'DespesasRendasController@despesasRendas')->name('user.bancos');
});



