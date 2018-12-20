@extends('layout')

@section('css') 
	<link rel="stylesheet" href="../css/fornecedor.css">
@endsection

@section('content')
<h2 class="sub">Fornecedores</h2>
			<div class="container">
			@foreach ($propostas as $proposta)
				<figure class="proposta">
					<img src="../img/proposta2.png"/>	
					<div class="icons">
						<a href="/gerenciar/{{ $proposta->id }}/edit"><img src="../img/settings.png"></a>
					</div>
					<figcaption>
					<h2>{{$proposta->rua}} <span>{{$proposta->bairro}}</span></h2>
						<p>{{$proposta->descricao}}</p>
					</figcaption>
				</figure>
			@endforeach	
				<figure class="proposta">
					<img src="../img/proposta3.png"/>	
					<div class="icons">
						<a href="#"><img src="../img/settings.png"></a>
					</div>
					<figcaption>
						<h2>146, Av. Josefino Souza <span>Leningrado</span></h2>
						<p>Vamos fazer o favor de não ler muito a fundo estas descrições, 
							pois lhe faltam carinho. Obrigado!</p>
					</figcaption>	
				</figure>
				
				<figure class="proposta">
					<img src="../img/sao-paulo.jpg"/>	
					<div class="icons">
						<a href="#"><img src="../img/settings.png"></a>
					</div>
					<figcaption>
						<h2>1782, Rua Getúlio Vargas <span>Leningrado</span></h2>
						<p>Vamos fazer o favor de não ler muito a fundo estas descrições, 
							pois lhe faltam carinho. Obrigado!</p>
					</figcaption>	
				</figure>
				
				<figure class="proposta">
					<img src="../img/hong-kong.jpg"/>	
					<div class="icons">
						<a href="#"><img src="../img/settings.png"></a>
					</div>
					<figcaption>
						<h2>23, Rua François Matusalém <span>Calamidas</span></h2>
						<p>Um ap. confortável perto do centro da cidade,
							aceito pets e o wifi já está incluso no preço
							do aluguel. Caso seja um estudante da UFRN  
							informe...</p>
					</figcaption>	
				</figure>
			</div>
@endsection