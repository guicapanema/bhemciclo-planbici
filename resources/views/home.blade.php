@extends('layouts.app')

@section('content')
	<section class="hero home-hero is-medium">
		<div class="hero-body">
			<div class="container" data-aos="fade-right">
				<h1 class="title has-text-white is-size-2">
					PlanBici BH
				</h1>
				<div class="subtitle-box">
					<h4 class="subtitle has-text-white is-uppercase has-text-weight-semibold is-size-6">
						Plano de Mobilidade por Bicicleta de Belo Horizonte
					</h4>
				</div>
			</div>
		</div>
	</section>

	<div class="divider is-success"></div>

	<section class="section has-background-info pedalar-bh" >
		<img id="home-bici-1" src="/img/home/home-bici-1.png"></img>
		<div class="container" data-aos="fade-up">
			<div class="content">
				<div class="columns is-centered">
					<div class="column is-6 has-text-centered">
						<h1 class="title is-underlined-dashed-white is-size-1">Pedalar em BH...</h1>
						<p>é uma forma saudável, gostosa e eficiente de se locomover, mas que ainda nos impõe uma série de desafios e poucas pessoas estão dispostas a enfrentá-los. Mas não deveria ser assim.</p>
						<p>Atualmente, apenas <strong>0,4%</strong> dos deslocamentos são feitos por bicicleta na cidade diariamente. Mas poderíamos ser mais.</p>
					</div>
				</div>
			</div>
		</div>
		<img id="home-bici-2" src="/img/home/home-bici-2.png"></img>
	</section>

	<div class="divider is-grey"></div>

	<section class="section">
		<div class="container content">
			<div class="columns">
				<div class="column is-half has-text-centered" data-aos="fade-right">
					<img src="/img/home/oqe.png"></img>
				</div>
			</div>
			<div class="columns is-vcentered">
				<div class="column is-half has-text-centered" data-aos="fade-right">
					<h1 class="has-text-centered is-size-1">O que é o Plano de Mobilidade por <span class="is-underlined-warning">Bicicleta?</span></h1>
				</div>

				<div class="column is-half" data-aos="fade-left">
					<p>O Plano de Mobilidade por Bicicleta de Belo Horizonte, PlanBici-BH, é um instrumento  criado para superar estes desafios e fazer com que a quantidade de pessoas que usam a bicicleta aumente progressivamente e atinja a meta de 2% dos deslocamentos diários até 2020.</p>
				</div>
			</div>
		</div>
	</section>

	<div class="divider is-warning"></div>

	<section class="section has-background-danger">
		<div class="container content has-text-white has-text-centered" data-aos="fade-up">
			<div class="columns">
				<div class="column is-8 is-offset-2">
					<img src="/img/home/plataforma.png"></img>
					<h1 class="title has-text-white is-underlined-dashed-success is-size-1">O que é essa plataforma?</h1>
					<p>Um Plano, sem sair do papel, nada resolve. Ou seja, é preciso materializar as ações previstas no planejamento para se alcançar as metas e os objetivos traçados.</p>
					<p>A proposta desta plataforma é ser uma ferramenta de acompanhamento da execução periódica das ações do PlanBici-BH, com objetivo de dar transparência a esse processo e possibilitar que mais pessoas monitorem as ações públicas que têm por fim promover o uso da bicicleta na cidade.</p>
				</div>
			</div>
		</div>
	</section>

	<div class="divider is-info"></div>

	<section class="section has-background-primary">
		<div class="container content has-text-centered">
			<div class="columns is-vcentered">
				<div class="column is-half" data-aos="fade-right">
					<h1 class="title has-text-white has-text-weight-bold"><span class="apoie">Apoie!</span></h1>
				</div>
				<div class="column is-half" data-aos="fade-left">
					<p>Se você acredita que Belo Horizonte pode ser mais amigável para o uso da bicicleta e apoia a execução do PlanBici-BH, junte-se a nós para mostrarmos à Prefeitura que, sim, <span class="has-text-weight-semibold">#BHPedala</span>.</p>
					<p class="has-text-centered">
						<a class="button is-large is-warning has-text-weight-semibold" href="/participe">Quero saber mais</a>
					</p>
				</div>
			</div>
		</div>
	</section>

	<div class="divider is-danger"></div>

	<section class="section">
		<div class="container content">
			<div class="columns" data-aos="fade-up">
				<div class="column">
					<h1 class="has-text-centered is-size-1 home-noticias-title">
						<span class="text-container">
							<img src="/img/home/noticias.png"></img>
							N<span class="is-underlined-warning">otícias</span>
						</span>
					</h1>
				</div>
			</div>
			<noticias></noticias>
			<div class="container has-text-centered">
				<a class="button is-large is-success has-text-weight-semibold has-text-dark" href="http://bhemciclo.org/noticias/">Ver mais notícias</a>
			</div>
		</div>
	</section>

	<div class="divider is-dark"></div>

@endsection
