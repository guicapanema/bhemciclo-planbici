@extends('layouts.app')

@section('content')

<section class="section notification is-light">
	<div class="container">
		<div class="content">
			<h1 class="has-text-centered">O PlanBici</h1>
			<h2>Histórico</h2>
			<p>Em 2015 a BH em Ciclo participou juntamente com outros coletivos da cidade de  um laboratório de ação política pela mobilidade, promovido pela Escola de Ativismo, foram 10 meses de trabalho e planejamento que no final geraram um produto de incidência nas eleições municipais para o executivo em 2016.</p>
			<p>Daí, foi criada a campanha #D1Passo, com objetivo de incluir e qualificar o tema mobilidade urbana no debate eleitoral. A campanha se mostrou efetiva e colheu uma série de compromissos da candidatura eleita em relação à mobilidade sustentável.</p>
			<p>Desde janeiro de 2017, fizemos pressão para que o Prefeito hornasse os compromissos ao longo da campanha eleitora. Conseguimos uma reunião com prefeito. Nela, ele nos propôs a elaboração de um “plano para a bicicleta na cidade” daí surgiu o PlanBici.</p>


			<h2>O que é</h2>
			<p>O PlanBici-BH é um plano de ações que foi desenvolvido pela BH em Ciclo, em trabalho conjunto com alguns órgãos da Prefeitura, em especial a BHTRANS, a Subsecretaria de Planejamento Urbano, SUDECAP, Secretaria do Meio Ambiente e outros cidadãos interessados (todas as reuniões de trabalho foram abertas e divulgadas com antecedência). Ele foi aprovado pelo prefeito Alexandre Kalil em 18 de julho de 2017 e desde então está em implantação.</p>
			<p>Seu grande objetivo é fazer com que 2% dos deslocamentos em Belo Horizonte sejam realizadas por bicicleta até o ano de 2020. Para tal, ele contém seis eixos, cada qual com objetivos, diretrizes, ações, metas, cronograma de execução e estimativa de custos.</p>
			<p class="has-text-weight-bold">As ações previstas foram agrupadas e 6 eixos:</p>
			<ol>
				<li>Infraestrutura e circulação</li>
				<li>Integração modal e bicicletas compartilhadas</li>
				<li>Comunicação, educação e mobilização</li>
				<li>Governança, produção de dados e transparência</li>
				<li>Legislação</li>
				<li>Financiamento</li>
			</ol>

			<div class="has-text-centered"><a class="button is-medium is-primary">Veja o documento completo</a></div>
		</div>
	</div>
</section>

<section class="section" id="app">
	<acompanhamento></acompanhamento>
</section>
@endsection
