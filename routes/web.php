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

//index
// view inicial a ser carregada
Route::get('/', 'PrincipalController@index')->name('index');

// login
// view de login
    Route::get('/login', 'UserController@login')->name('login');
    // função de login
    Route::get('/login/auth', 'UserController@autenticar')->name('login.auth');

// cadastro
    // view de cadastro
    Route::get('/register', 'UserController@cadastro')->name('register');
    // função de register
    Route::post('/register/auth', 'UserController@register')->name('register.auth');

Route::prefix('/user')->group(function() {

    // dashboard geral dos dados
    Route::get('/visao-geral', 'VisaoGeralController@visaoGeral')->name('user.visao-geral');

    // perfil
    Route::get('/perfil', 'PerfilController@viewPerfil')->name('user.perfil');

    // configurações
    Route::get('/configuracoes', 'ConfiguracoesController@configuracoes')->name('user.configuracoes');

    // dashboard de despesas e rendas
    Route::get('/despesas-rendas', 'DespesasRendasController@despesasRendas')->name('user.despesas-rendas');

    // despesas
        // view de inserção de despesa
        Route::get('/create-despesa','DespesasRendasController@createDesp')->name('user.create.despesa');

        // view de edição de despesa
        Route::get('/edit-despesa/{id}', 'DespesasRendasController@editDesp')->name('user.edit.despesa');

        // função de inserção de despesa
        Route::post('/insert-desp', 'DespesasRendasController@insertDesp')->name('user.insert.despesa');

        // função de edição de despesa
        Route::post('/update-desp/{id}', 'DespesasRendasController@updateDesp')->name('user.update.despesa');

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
        Route::post('/update-rend/{id}', 'DespesasRendasController@updateRend')->name('user.update.renda');

        // função de deleção de despesa
        Route::put('/delete-rend/{id}', 'DespesasRendasController@deleteRend')->name('user.delete.renda');


    // dashboard dos bancos
    Route::get('/bancos', 'DespesasRendasController@bancos')->name('user.bancos');
        // view de inserção de banco
        Route::get('/create-banco','BancosController@createBanc')->name('user.create.banco');

        // view de edição de banco
        Route::get('/edit-banco/{id}', 'BancosController@editBanc')->name('user.edit.banco');

        // função de inserção de banco
        Route::post('/insert-banc', 'BancosController@insertBanc')->name('user.insert.banco');

        // função de edição de banco
        Route::post('/update-banc/{id}', 'BancosController@updateBanc')->name('user.update.banco');

        // função de deleção de banco
        Route::get('/delete-banc/{id}', 'BancosController@deleteBanc')->name('user.delete.banco');

    // dashboard das transferencias
    Route::get('/transfer', 'TransferenciasController@transferencias')->name('user.transfer');
        // view de inserção de transferencia
        Route::get('/create-transferencia','TransferenciasController@createTransf')->name('user.create.transferencia');

        // view de edição de transferencia
        Route::get('/edit-transferencia/{id}', 'TransferenciasController@editTransf')->name('user.edit.transferencia');

        // função de inserção de transferencia
        Route::post('/insert-transf', 'TransferenciasController@insertTransf')->name('user.insert.transferencia');

        // função de edição de transferencia
        Route::post('/update-transf/{id}', 'TransferenciasController@updateTransf')->name('user.update.transferencia');

        // função de deleção de transferencia
        Route::get('/delete-transf/{id}', 'TransferenciasController@deleteTransf')->name('user.delete.transferencia');
});



