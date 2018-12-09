@extends('layout')

@section('css') 
	<link rel="stylesheet" href="../css/index.css">
@endsection

@section('content')
			<div class="promo">
				<button>Inscrever-se</button>
				<h2>
					Mercury é uma plataforma que visa auxiliar estudantes em sua integração na vida universitária.
				</h2>
			</div>
		</header>
			<section>
				<h1>Como funciona?</h1>
				<div class="desc">
					<p>Mercury é uma plataforma que visa auxiliar estudantes em sua integração na vida universitária.</p>
					
					<p>Através da conciliação das demandas por hospedagem e serviços (por parte dos estudantes) e dos
						interesses do mercado imobiliário(por parte de pequenos donos de imóveis), o objetivo é tornar a
						inserção universitária mais prática e financeiramente viável.</p>
						
					<!--<p>O propósito do Mercury fora aplicar o conhecimento adquirido ao longo do curso técnico-integrado
						de Informática para Internet do IFRN numa perspectiva mercadológica e prática. Visto que os
						integrantes são pré-universitários, o projeto tenta atuar como uma voz que procura instigar
						os indivíduos a atuar nas áreas que conhecem para propor soluções à problemas que conhecem.</p>-->
				</div>
			</section>

			<section>
				<div class="item">
					<img src="img/hospedagem.png"/><h3>Hospedagem</h3>
				</div>
				<div class="item">
					<img src="img//alimentação.png"/><h3>Alimentação</h3>
				</div>
				<div class="item">
					<img src="img//transporte.png"/><h3>Transporte</h3>
				</div>
				<div class="item">
					<img src="img//social.png"/><h3>Sociabilidade</h3>
				</div>
				<div class="item">
					<img src="img//wi-fi.png"/><h3>Wi-Fi grátis</h3>
				</div>
				<div class="item">
					<img src="img//estudos.png"/><h3>Ambiente de estudos</h3>
				</div>
			</section>

			<div class="laranja">
				<section>
					<img src="img//students-frontpage.png"/><img src="img//students-search.png"/>
				</section>
				<section>
					<h1>Simples e direto, sem complicações.</h1>
					<div class="desc">
						<p>Para estudantes, a interface procura ser completa e de 
							fácil aquisição, em especial quando já está em algum contrato 
							com um fornecedor, para a rápida resolução e reajuste de 
							problemas.</p>

						<p>Há também a busca adaptativa às necessidades do 
							estudante, que é primordial para a satisfação dos mesmos.</p>
					</div>
				</section>
			</div>
			<section>
				<h1>Acessível e prático.</h1>
				<div class="desc">
					<p>Na interface dos fornecedores, ícones são abundantes e dados analíticos são constantemente
						apresentados, para que o entendimento mercadológico de seus serviços seja compreendido,
						proporcionando um artifício administrativo pela própria plataforma.</p>
					
					<p>Esperou-se que o perfil
						do fornecedor médio fosse de baixo ou moderado conhecimento tecnológico, portanto acessibilidade
						são um dos pilares de sua interface.</p>
				</div>
			</section>

			<section>
				<img src="img/realestate-frontpage.png" style="margin: 7em 0 0 2.4em; max-width: 40%; box-shadow: 0.5em 0.5em 0.5em #000;"/>
				<img src="img/realestate-propositions.png" style="margin: 7em 0 0 1.4em; max-width: 40%; box-shadow: 0.5em 0.5em 0.5em #000;"/>
			</section>
@endsection