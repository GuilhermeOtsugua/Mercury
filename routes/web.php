<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/gerenciar', function () {

    return view('fornecedor.gerenciar')->withPropostasCriadas([

        'Tabela de propostas criadas!'

    ]);

});

Route::get('/propostas', function () {
    return view('estudante.propostas');
});