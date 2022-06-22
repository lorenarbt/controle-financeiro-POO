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

    // dashboard despesas e rendas
    Route::get('/despesas-renda', 'DespesasRendasController@despesasRendas')->name('user.despesasrendas');

    // despesas
        // view de inserção de despesa
        Route::get('/view-insert-despesa',
        'DespesasRendasController@viewInsertDesp')->name('user.despesa');

        // view de edição de despesa
        Route::get('/view-edit-despesa', 'DespesasRendasController@viewEditDesp')->name('user.despesa');

        // função de inserção de despesa
        Route::post('/send_desp', 'DespesasRendasController@InsertDesp')->name('user.insert.despesa');

        // função de edição de despesa
        Route::put('/edit_desp', 'DespesasRendasController@EditDesp')->name('user.edit.despesa');

    // rendas
        // view de inserção de renda
        Route::get('/view-insert-renda', 'DespesasRendasController@viewInsertRend')->name('user.renda');

        // view de edição de renda
        Route::get('/view-edit-renda', 'DespesasRendasController@viewEditRend')->name('user.renda');

        // função de inserção de renda
        Route::post('/send_rend', 'DespesasRendasController@InsertRend')->name('user.insert.renda');

        // função de edição de renda
        Route::put('/edit_rend', 'DespesasRendasController@EditRend')->name('user.edit.renda');

});



