@extends('layouts.app')

@section('content')

<div class="divider is-primary" style="z-index: 31"></div>


<section class="section has-background-grey-light">
	<div class="container content">
		<h1 class="title has-text-centered is-size-1">
			<span class="is-underlined-dashed-warning">
				Conheça o PlanBici BH
			</span>
		</h1>
		<h3 class="subtitle has-margin-top-500">
			<span class="colored-subtitle has-background-success">Histórico</span>
		</h3>
		<p>Em 2015 a BH em Ciclo participou juntamente com outros coletivos da cidade de  um laboratório de ação política pela mobilidade, promovido pela Escola de Ativismo, foram 10 meses de trabalho e planejamento que no final geraram um produto de incidência nas eleições municipais para o executivo em 2016.</p>
		<p>Daí, foi criada a campanha #D1Passo, com objetivo de incluir e qualificar o tema mobilidade urbana no debate eleitoral. A campanha se mostrou efetiva e colheu uma série de compromissos da candidatura eleita em relação à mobilidade sustentável.</p>
		<p>Desde janeiro de 2017, fizemos pressão para que o Prefeito hornasse os compromissos ao longo da campanha eleitora. Conseguimos uma reunião com prefeito. Nela, ele nos propôs a elaboração de um “plano para a bicicleta na cidade” daí surgiu o PlanBici.</p>


		<h3 class="subtitle">
			<span class="colored-subtitle has-background-info">O que é</span>
		</h3>
		<p>O PlanBici-BH é um plano de ações que foi desenvolvido pela BH em Ciclo, em trabalho conjunto com alguns órgãos da Prefeitura, em especial a BHTRANS, a Subsecretaria de Planejamento Urbano, SUDECAP, Secretaria do Meio Ambiente e outros cidadãos interessados (todas as reuniões de trabalho foram abertas e divulgadas com antecedência). Ele foi aprovado pelo prefeito Alexandre Kalil em 18 de julho de 2017 e desde então está em implantação.</p>
		<p>Seu grande objetivo é fazer com que 2% dos deslocamentos em Belo Horizonte sejam realizadas por bicicleta até o ano de 2020. Para tal, ele contém seis eixos, cada qual com objetivos, diretrizes, ações, metas, cronograma de execução e estimativa de custos.</p>
		<h3 class="subtitle">
			As ações previstas foram agrupadas e 6 eixos:
		</h3>
		<div class="columns is-mobile is-multiline">
			<div class="column is-6-mobile is-4-tablet is-2-desktop has-text-centered">
				<img src="/img/planbici/infraestrutura.png"></img>
				<div class="is-uppercase has-text-weight-semibold is-size-7">
					Infraestrutura e circulação
				</div>
			</div>
			<div class="column is-6-mobile is-4-tablet is-2-desktop has-text-centered">
				<img src="/img/planbici/integracao.png"></img>
				<div class="is-uppercase has-text-weight-semibold is-size-7">
					Integração modal e bicicletas compartilhadas
				</div>
			</div>
			<div class="column is-6-mobile is-4-tablet is-2-desktop has-text-centered">
				<img src="/img/planbici/comunicacao.png"></img>
				<div class="is-uppercase has-text-weight-semibold is-size-7">
					Comunicação, educação e mobilização
				</div>
			</div>
			<div class="column is-6-mobile is-4-tablet is-2-desktop has-text-centered">
				<img src="/img/planbici/governanca.png"></img>
				<div class="is-uppercase has-text-weight-semibold is-size-7">
					Governança, produção de dados e transparência
				</div>
			</div>
			<div class="column is-6-mobile is-4-tablet is-2-desktop has-text-centered">
				<img src="/img/planbici/legislacao.png"></img>
				<div class="is-uppercase has-text-weight-semibold is-size-7">
					Legislação
				</div>
			</div>
			<div class="column is-6-mobile is-4-tablet is-2-desktop has-text-centered">
				<img src="/img/planbici/financiamento.png"></img>
				<div class="is-uppercase has-text-weight-semibold is-size-7">
					Financiamento
				</div>
			</div>
		</div>

		<div class="has-text-centered"><a class="button is-medium is-danger">Veja o documento completo</a></div>
	</div>
</section>

<div class="divider is-info"></div>

<section class="section">
	<div class="container">
		<acompanhamento></acompanhamento>
	</div>
</section>

<div class="divider is-dark"></div>

@endsection
