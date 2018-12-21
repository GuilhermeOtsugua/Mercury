@extends('layout')

@section('css') 
	<link rel="stylesheet" href="../css/fornecedor.css">
@endsection

@section('content')
<h2 class="sub">Fornecedores</h2>
			<div class="container">
				<figure class="propostaG">
					<img src="../img/proposta2.png"/>	
					<div class="icons">
						<a href="/gerenciar/{{ $proposta->id }}/edit"><img src="../img/settings.png"></a>
					</div>
					<figcaption>
					<h2>{{$proposta->rua}} <span>{{$proposta->bairro}}</span></h2>
                        <p>{{$proposta->descricao}}</p>
                        @foreach ($tags as $tag)
                            <p style="font-size: 2em; top: 80%; left:80%;">{{ $tag->iconpath }}</p>
                        @endforeach
					</figcaption>
                </figure>
			</div>
@endsection