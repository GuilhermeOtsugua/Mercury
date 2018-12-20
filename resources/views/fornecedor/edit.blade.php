@extends('layout')

@section('css') 
	<link rel="stylesheet" href="../../css/forms.css">
@endsection

@section('content')
<h2 class="sub">Fornecedores</h2>
<div class="container">
    <form method="POST" action="/gerenciar/{{ $proposta->id }}">
        @csrf
        @method('PATCH')
        
            <input type="text" name="rua" placeholder="Rua:" value="{{ $proposta->rua }}">
       
            <input type="text" name="bairro" placeholder="Bairro:" value="{{ $proposta->bairro }}">

            <textarea name="descricao" placeholder="Descrição/Resumo:">{{ $proposta->descricao }}</textarea>

            <input type="number" name="preco" placeholder="Preço:" value="{{ $proposta->preco }}">
     
            <button type="submit">Editar Proposta</button>

        </form>
    <form method="POST" action="/gerenciar/{{ $proposta->id }}">
        @csrf
        @method('DELETE')

        <button type="submit" class="red">Deletar Proposta</button>
    </form>
</div>			
@endsection