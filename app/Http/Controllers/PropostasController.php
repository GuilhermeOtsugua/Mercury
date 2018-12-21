<?php

namespace App\Http\Controllers;

use App\Proposta;
use App\Tag;
use Illuminate\Http\Request;

class PropostasController extends Controller
{

    public function index()
    {
        $propostas = Proposta::all();

        return view('fornecedor.gerenciar', compact('propostas'));
    }

    public function create()
    {
        $propostas = Proposta::all();

        return view('fornecedor.create', compact('propostas'));
    }

    public function store()
    {
        // $proposta = new Proposta();

        // $proposta->rua = request('rua');
        // $proposta->bairro = request('bairro');
        // $proposta->descricao = request('descricao');
        // $proposta->preco = request('preco');

        // $proposta->save();

        Proposta::create(request(['rua', 'bairro', 'descricao', 'preco']));

        return redirect('/gerenciar');
    }

    public function show($id)
    {
        $proposta = Proposta::findOrFail($id);
        $tags = [Tag::findOrFail($id)];
        return view('fornecedor.show', compact('proposta', 'tags'));
    }

    public function edit($id)
    {
        $proposta = Proposta::findOrFail($id);
        return view('fornecedor.edit', compact('proposta'));
    }
 
    public function update($id)
    {
        $proposta = Proposta::findOrFail($id);

        $proposta->rua = request('rua');
        $proposta->bairro = request('bairro');
        $proposta->descricao = request('descricao');
        $proposta->preco = request('preco');

        $proposta->save();

        // $proposta->update(request(['rua', 'bairro', 'descricao', 'preco']));

        return redirect('/gerenciar');
    }

    public function destroy($id)
    {
        Proposta::findOrFail($id)->delete();

        return redirect('/gerenciar');
    }
}
