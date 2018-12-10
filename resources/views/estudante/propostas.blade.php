@extends('layout')

@section('css') 
	<link rel="stylesheet" href="../css/estudante.css">
@endsection

@section('content')
			<div class="container">
				<figure class="proposta">
					<img src="../img/proposta3.png"/>	
					<div class="icons">
						<a href="#"><img src="../img/icons8-casa-filled-50.png"></a>
						<a href="#"><img src="../img/icons8-fiat-500-filled-50.png"></a>
						<a href="#"><img src="../img/icons8-comida-50.png"></a>
					</div>
					<figcaption>
						<h2>146, Av. Josefino Souza <span>Leningrado</span></h2>
						<p>Vamos fazer o favor de não ler muito a fundo estas descrições, 
							pois lhe faltam carinho. Obrigado!</p>
					</figcaption>	
				</figure>
				
				<figure class="proposta">
					<img src="../img/proposta2.png"/>	
					<div class="icons">
						<a href="#"><img src="../img/icons8-casa-filled-50.png"></a>
						<a href="#"><img src="../img/icons8-livro-filled-50.png"></a>
						<a href="#"><img src="../img/icons8-wi-fi-filled-50.png"></a>
					</div>
					<figcaption>
						<h2>58, Av. Amorosa <span>São Gonçalo</span></h2>
						<p>Um ap. confortável perto do centro da cidade,
							aceito pets e o wifi já está incluso no preço
							do aluguel. Caso seja um estudante da UFRN  
							informe...</p>
					</figcaption>	
				</figure>
			</div>
@endsection