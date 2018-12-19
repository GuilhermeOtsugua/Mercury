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

use \App\Proposta;

Route::get('/', function () {
    return view('index');
});

Route::get('/gerenciar', function () {

    $propostas = Proposta::all();

    return view('fornecedor.gerenciar', compact('propostas'));

});

Route::post('/gerenciar', function () {

    $proposta = new Proposta();

    $proposta->rua = request('rua');
    $proposta->bairro = request('bairro');
    $proposta->descricao = request('descricao');
    $proposta->preco = request('preco');

    $proposta->save();

    return redirect('/gerenciar');

});

Route::get('/gerenciar/create', function () {

    $propostas = \App\Proposta::all();

    return view('fornecedor.create', compact('propostas'));

});

Route::get('/propostas', function () {
    return view('estudante.propostas');
});