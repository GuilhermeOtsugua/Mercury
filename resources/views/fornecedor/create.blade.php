@extends('layout')

@section('css') 
	<link rel="stylesheet" href="../css/fornecedor.css">
@endsection

@section('content')
<h2 class="sub">Fornecedores</h2>

<form>
    <div>
        <input type="text" name="rua">
    </div>
    <div>
        <input type="text" name="bairro">
    </div>
    <div>
        <button type="submit">Criar Proposta</button>
    </div>
</form>
			
@endsection