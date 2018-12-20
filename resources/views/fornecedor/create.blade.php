@extends('layout')

@section('css') 
	<link rel="stylesheet" href="../css/forms.css">
@endsection

@section('content')
<h2 class="sub">Fornecedores</h2>
<div class="container">
    <form method="POST" action="/gerenciar">
        @csrf
        
            <input type="text" name="rua" placeholder="Rua:" required>
       
            <input type="text" name="bairro" placeholder="Bairro:" required>

            <input type="text" name="descricao" placeholder="Descrição/Resumo:" required>

            <input type="number" name="preco" placeholder="Preço:" required>
     
            <button type="submit">Criar Proposta</button>

        </form>
</div>			
@endsection