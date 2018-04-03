<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="has-navbar-fixed-top">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<link href="https://use.fontawesome.com/releases/v5.0.3/css/all.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar is-fixed-top is-primary">
		<div class="navbar-brand">
			<a class="navbar-item">
				PlanBici-BH
			</a>
		</div>

		<div class="navbar-menu">
			<div class="navbar-start">
				<a class="navbar-item" href="/">
					Início
				</a>
				<div class="navbar-item has-dropdown is-hoverable">
					<a class="navbar-link">
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
				<a class="navbar-item" href="/participe">
					Participe e Cobre
				</a>
				<a class="navbar-item" href="/contato">
					Contato
				</a>
			</div>
		</div>
	</nav>
	@yield('content')
</body>
</html>
