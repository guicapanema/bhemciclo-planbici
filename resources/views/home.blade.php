@extends('layouts.app')

@section('content')
	<section class="hero hero-home is-medium">
		<div class="hero-body">
			<div class="container">
				<h1 class="title has-text-white">
					PlanBici-BH
				</h1>
				<h2 class="subtitle has-text-white">
					Plano de Mobilidade por Bicicleta de Belo Horizonte
				</h2>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="content">
			<div class="columns">
				<div class="column is-8 is-offset-2">
					<h1 class="has-text-centered">Pedalar em BH...</h1>
					<p>é uma forma saudável, gostosa e eficiente de se locomover, mas que ainda nos impõe uma série de desafios e poucas pessoas estão dispostas a enfrentá-los. Mas não deveria ser assim.</p>
					<p>Atualmente, apenas <strong>0,4%</strong> dos deslocamentos são feitos por bicicleta na cidade diariamente. Mas poderíamos ser mais.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="section notification is-primary">
		<div class="content">
			<div class="columns">
				<div class="column is-8 is-offset-2">
					<h1 class="has-text-centered has-text-white">O que é o Plano de Mobilidade por Bicicleta?</h1>
					<p>O Plano de Mobilidade por Bicicleta de Belo Horizonte, PlanBici-BH, é um instrumento  criado para superar estes desafios e fazer com que a quantidade de pessoas que usam a bicicleta aumente progressivamente e atinja a meta de 2% dos deslocamentos diários até 2020.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="content">
			<div class="columns">
				<div class="column is-8 is-offset-2">
					<h1 class="has-text-centered">O que é essa plataforma?</h1>
					<p>Um Plano, sem sair do papel, nada resolve. Ou seja, é preciso materializar as ações previstas no planejamento para se alcançar as metas e os objetivos traçados.</p>
					<p>A proposta desta plataforma é ser uma ferramenta de acompanhamento da execução periódica das ações do PlanBici-BH, com objetivo de dar transparência a esse processo e possibilitar que mais pessoas monitorem as ações públicas que têm por fim promover o uso da bicicleta na cidade.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="section notification is-light">
		<div class="content">
			<div class="columns">
				<div class="column is-8 is-offset-2">
					<h1 class="has-text-centered">Apoie!</h1>
					<p>Se você acredita que Belo Horizonte pode ser mais amigável para o uso da bicicleta e apoia a execução do PlanBici-BH, junte-se a nós para mostrarmos à Prefeitura que, sim, <strong>#BHPedala</strong>.</p>
					<p class="has-text-centered">
						<a class="button is-medium is-primary has-text-weight-bold" href="/participe">Quero saber mais</a>
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="content">
			<div class="columns">
				<div class="column">
					<h1 class="has-text-centered">Notícias</h1>
				</div>
			</div>
			<noticias></noticias>
			<div class="container has-text-centered">
				<a class="button is-medium is-primary has-text-weight-bold" href="http://bhemciclo.org/noticias/">Ver mais notícias</a>
			</div>
		</div>
	</section>

@endsection
