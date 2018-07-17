<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<link rel="home" href="https://www.planbicibh.org/">

	<meta name="description" content="Conheça, participe e se aproprie do PlanBici BH - Plano de Mobilidade por Bicicleta de Belo Horizonte!">
	<meta name="keywords" content="mobilidade,bicicleta,bh,belo horizonte,planbici">
	<meta name="author" content="BH em Ciclo">

	<meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}">
	<meta property="og:title" content="{{ config('app.name', 'Laravel') }}">
	<meta property="og:description" content="Conheça, participe e se aproprie do PlanBici BH - Plano de Mobilidade por Bicicleta de Belo Horizonte!">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://www.planbicibh.org/">
	<link rel="canonical" href="https://www.planbicibh.org/">

	<link rel='dns-prefetch' href='//ajax.googleapis.com' />
	<link rel='dns-prefetch' href='//fonts.googleapis.com' />

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar is-white">
		<div class="container is-fluid">
			<div class="navbar-brand has-text-weight-bold">
				<img class="logo" src="/img/logo.png"></img>

				<a role="button" class="navbar-burger has-text-dark" data-target="navMenu" aria-label="menu" aria-expanded="false">
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
				</a>
			</div>

			<div class="navbar-menu" id="navMenu">
				<div class="navbar-start">
				</div>
				<div class="navbar-end">
					<a class="navbar-item {{ Request::is('/') ? "is-active" : "" }}" href="/">
						<span class="inicio">Início</span>
					</a>
					<div class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link {{ Request::is('planbici') ? "is-active" : "" }}" href="/planbici">
							<span class="o-planbici">
								<img src="/img/o-planbici.png"></img>
								O PlanBici
							</span>
						</a>
						<div class="navbar-dropdown">
							<a href="/planbici" class="navbar-item">
								Conheça
							</a>
							<a href="/planbici#acompanhe" class="navbar-item">
								Acompanhe
							</a>
						</div>
					</div>
					<a class="navbar-item {{ Request::is('participe') ? "is-active" : "" }}" href="/participe">
						<span class="participe-cobre">Participe e Cobre</span>
					</a>
					<a class="navbar-item {{ Request::is('contato') ? "is-active" : "" }}" href="/contato">
						<span class="contato">Contato</span>
					</a>
				</div>
			</div>
		</div>
	</nav>
	<div id="app">
		@yield('content')
	</div>
	<footer class="footer">
		<div class="container has-margin-bottom-100">
			<div class="columns is-centered">
				<div class="column is-narrow content">
					<h5 class="is-marginless">#euqueroplanbici</h5>
				</div>
			</div>
			<div class="columns is-centered ">
				<div class="column is-narrow">
					<figure class="image is-48x48">
						<a href="https://www.facebook.com/hashtag/euqueroplanbici" target="_blank">
							<img src="/img/facebook.png"></img>
						</a>
					</figure>
				</div>
				<div class="column is-narrow">
					<figure class="image is-48x48">
						<a href="https://twitter.com/hashtag/euqueroplanbici" target="_blank">
							<img src="/img/twitter.png"></img>
						</a>
					</figure>
				</div>
				<div class="column is-narrow">
					<a href="https://www.instagram.com/explore/tags/euqueroplanbici/" target="_blank">
						<figure class="image is-48x48">
							<img src="/img/instagram.png"></img>
						</figure>
					</a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="content has-text-centered">
				<p>
					Código fonte sob licença <a rel="license" href="https://www.gnu.org/licenses/agpl-3.0.html">AGPLv3</a>.
					<a href="https://github.com/guicapanema/bhemciclo-planbici"><span class="icon">
						<i class="fab fa-github"></i>
					</span></a>
				</p>
				<p>
					Conteúdo sob licença <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Atribuição 4.0 Internacional</a>.
				</p>
			</div>
		</div>
	</footer>

</body>
</html>
