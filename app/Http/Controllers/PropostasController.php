<?php

namespace App\Http\Controllers;

use App\Proposta;
use Illuminate\Http\Request;

class PropostasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propostas = Proposta::all();

        return view('fornecedor.gerenciar', compact('propostas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $propostas = Proposta::all();

        return view('fornecedor.create', compact('propostas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $proposta = new Proposta();

        $proposta->rua = request('rua');
        $proposta->bairro = request('bairro');
        $proposta->descricao = request('descricao');
        $proposta->preco = request('preco');

        $proposta->save();

        return redirect('/gerenciar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proposta  $proposta
     * @return \Illuminate\Http\Response
     */
    public function show(Proposta $proposta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proposta  $proposta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proposta = Proposta::findOrFail($id);
        return view('fornecedor.edit', compact('proposta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proposta  $proposta
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $proposta = Proposta::findOrFail($id);

        $proposta->rua = request('rua');
        $proposta->bairro = request('bairro');
        $proposta->descricao = request('descricao');
        $proposta->preco = request('preco');

        $proposta->save();

        return redirect('/gerenciar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proposta  $proposta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proposta::findOrFail($id)->delete();

        return redirect('/gerenciar');
    }
}
