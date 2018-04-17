<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"></script>
</head>
<body>
	<nav class="navbar is-spaced is-white">
		<div class="container">
			<div class="navbar-brand has-text-weight-bold">
				<a class="navbar-item">
					PlanBici-BH
				</a>
			</div>

			<div class="navbar-menu">
				<div class="navbar-start">
					<a class="navbar-item {{ Request::is('/') ? "is-active" : "" }}" href="/">
						<span class="icon is-medium has-text-primary">
							<i class="fas fa-home"></i>
						</span>
						<span>Início</span>
					</a>
					<div class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link {{ Request::is('planbici') ? "is-active" : "" }}">
							<span class="icon is-medium has-text-danger">
								<i class="fas fa-bicycle"></i>
							</span>
							O PlanBici
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
						<span class="icon is-medium has-text-warning">
							<i class="fas fa-users"></i>
						</span>
						Participe e Cobre
					</a>
					<a class="navbar-item {{ Request::is('contato') ? "is-active" : "" }}" href="/contato">
						<span class="icon is-medium has-text-success">
							<i class="fas fa-envelope"></i>
						</span>
						Contato
					</a>
				</div>
			</div>
		</div>
	</nav>
	<div id="app">
		@yield('content')
	</div>
	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
