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
Route::get('/', 'PrincipalController@index')->name('index');

// login
    // view de login
    Route::get('/login', 'UsuarioController@viewLogin')->name('login');
    // função de login
    Route::get('/login/auth', 'UsuarioController@login')->name('login.auth');

// cadastro
    // view de cadastro
    Route::get('/cadastro', 'UsuarioController@viewCadastro')->name('cadastro');
    // função de cadastro
    Route::post('/cadastro/auth', 'UsuarioController@createCadastro')->name('cadastro.auth');

Route::prefix('/user')->group(function() {
    // dashboard geral dos dados
    Route::get('/visao-geral', 'VisaoGeralController@viewVisaoGeral')->name('user.visaogeral');

    // perfil
    Route::get('/perfil', 'PerfilController@viewPerfil')->name('user.perfil');

    // configurações
    Route::get('/configuracoes', 'ConfiguracoesController@viewConfiguracoes')->name('user.configuracoes');

    // dashboard de despesas e rendas
    Route::get('/despesas-rendas', 'DespesasRendasController@viewDespesasRendas')->name('user.despesas-rendas');

    // despesas
        // view de inserção de despesa
        Route::get('/create-despesa','DespesasRendasController@createDesp')->name('user.create.despesa');

        // view de edição de despesa
        Route::get('/edit-despesa/{id}', 'DespesasRendasController@editDesp')->name('user.edit.despesa');

        // função de inserção de despesa
        Route::post('/insert-desp', 'DespesasRendasController@insertDesp')->name('user.insert.despesa');

        // função de edição de despesa
        Route::put('/update-desp/{id}', 'DespesasRendasController@updateDesp')->name('user.update.despesa');

        // função de deleção de despesa
        Route::get('/delete-desp/{id}', 'DespesasRendasController@deleteDesp')->name('user.delete.despesa');

    // rendas
        // view de inserção de renda
        Route::get('/create-renda', 'DespesasRendasController@createRend')->name('user.create.renda');

        // view de edição de renda
        Route::get('/edit-renda/{id}', 'DespesasRendasController@editRend')->name('user.edit.renda');

        // função de inserção de renda
        Route::post('/insert-rend', 'DespesasRendasController@insertRend')->name('user.insert.renda');

        // função de edição de renda
        Route::put('/update-rend/{id}', 'DespesasRendasController@updateRend')->name('user.update.renda');

        // função de deleção de despesa
        Route::put('/delete-rend/{id}', 'DespesasRendasController@deleteRend')->name('user.delete.renda');


    // dashboard dos bancos
    Route::get('/bancos', 'DespesasRendasController@bancos')->name('user.bancos');

    // dashboard das transferencias
    Route::get('/transfer', 'TransferenciasController@transferencias')->name('user.transfer');
});



