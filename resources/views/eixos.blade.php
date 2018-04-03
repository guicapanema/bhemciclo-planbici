@extends('layouts.app')

@section('content')
	<section class="section notification is-light">
		<div class="container">
			<div class="content">
				<h1 class="has-text-centered">O PlanBici</h1>
				<h2>Histórico</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam viverra orci ac ex posuere, nec volutpat ante interdum. Etiam ut urna sit amet nisi vulputate tincidunt. Duis commodo sapien ex, iaculis malesuada dui tincidunt sed. Nulla facilisis tellus metus, at rhoncus nibh bibendum nec. Sed urna arcu, tempor et imperdiet ut, efficitur id metus. Suspendisse et purus elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

				<h2>O que é</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam viverra orci ac ex posuere, nec volutpat ante interdum. Etiam ut urna sit amet nisi vulputate tincidunt. Duis commodo sapien ex, iaculis malesuada dui tincidunt sed. Nulla facilisis tellus metus, at rhoncus nibh bibendum nec. Sed urna arcu, tempor et imperdiet ut, efficitur id metus. Suspendisse et purus elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

				<h2>Onde quer chegar</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam viverra orci ac ex posuere, nec volutpat ante interdum. Etiam ut urna sit amet nisi vulputate tincidunt. Duis commodo sapien ex, iaculis malesuada dui tincidunt sed. Nulla facilisis tellus metus, at rhoncus nibh bibendum nec. Sed urna arcu, tempor et imperdiet ut, efficitur id metus. Suspendisse et purus elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

				<div class="has-text-centered"><a class="button is-medium is-primary">Veja o documento completo</a></div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="content">
				<h1 class="has-text-centered">Acompanhe o plano</h1>
			</div>
			<div class="has-text-centered">
				<a href="/planbici" class="button is-primary">Geral</a>
				<a class="button is-primary is-active">Eixos</a>
			</div>
			<div class="columns is-vcentered">
				<div class="column is-one-fifth has-text-right">2017</div>
				<div class="column">
					<input class="slider is-fullwidth" step="1" min="2017" max="2020" value="2018" type="range">
				</div>
				<div class="column is-one-fifth">2020</div>
			</div>
		</div>
		<div class="columns">
			<div class="column">
				<div class="card">
					<header class="card-header">
						<p class="card-header-title">
							Circulação e Infraestrutura
						</p>
					</header>
					<div class="card-content">
						<div class="content">
							<div class="columns">
								<div class="column is-one-third">Status total:</div>
								<div class="column"><progress class="progress is-danger" value="10" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Ações executadas:</div>
								<div class="column"><progress class="progress is-danger" value="15" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Ações iniciadas:</div>
								<div class="column"><progress class="progress is-danger" value="12" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Recursos assegurados:</div>
								<div class="column"><progress class="progress is-danger" value="16" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Recursos executados:</div>
								<div class="column"><progress class="progress is-danger" value="17" max="100">90%</progress></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="column">
				<div class="card">
					<header class="card-header">
						<p class="card-header-title">
							Comunicação, educação e mobilização
						</p>
					</header>
					<div class="card-content">
						<div class="content">
							<div class="columns">
								<div class="column is-one-third">Status total:</div>
								<div class="column"><progress class="progress is-danger" value="10" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Ações executadas:</div>
								<div class="column"><progress class="progress is-danger" value="15" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Ações iniciadas:</div>
								<div class="column"><progress class="progress is-danger" value="12" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Recursos assegurados:</div>
								<div class="column"><progress class="progress is-danger" value="16" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Recursos executados:</div>
								<div class="column"><progress class="progress is-danger" value="17" max="100">90%</progress></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="columns">
			<div class="column">
				<div class="card">
					<header class="card-header">
						<p class="card-header-title">
							Integração modal e bicicletas compartilhadas
						</p>
					</header>
					<div class="card-content">
						<div class="content">
							<div class="columns">
								<div class="column is-one-third">Status total:</div>
								<div class="column"><progress class="progress is-danger" value="10" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Ações executadas:</div>
								<div class="column"><progress class="progress is-danger" value="15" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Ações iniciadas:</div>
								<div class="column"><progress class="progress is-danger" value="12" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Recursos assegurados:</div>
								<div class="column"><progress class="progress is-danger" value="16" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Recursos executados:</div>
								<div class="column"><progress class="progress is-danger" value="17" max="100">90%</progress></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="column">
				<div class="card">
					<header class="card-header">
						<p class="card-header-title">
							Governança, produção de dados e transparência;
						</p>
					</header>
					<div class="card-content">
						<div class="content">
							<div class="columns">
								<div class="column is-one-third">Status total:</div>
								<div class="column"><progress class="progress is-danger" value="10" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Ações executadas:</div>
								<div class="column"><progress class="progress is-danger" value="15" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Ações iniciadas:</div>
								<div class="column"><progress class="progress is-danger" value="12" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Recursos assegurados:</div>
								<div class="column"><progress class="progress is-danger" value="16" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Recursos executados:</div>
								<div class="column"><progress class="progress is-danger" value="17" max="100">90%</progress></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="columns">
			<div class="column">
				<div class="card">
					<header class="card-header">
						<p class="card-header-title">
							Legislação
						</p>
					</header>
					<div class="card-content">
						<div class="content">
							<div class="columns">
								<div class="column is-one-third">Status total:</div>
								<div class="column"><progress class="progress is-danger" value="10" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Ações executadas:</div>
								<div class="column"><progress class="progress is-danger" value="15" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Ações iniciadas:</div>
								<div class="column"><progress class="progress is-danger" value="12" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Recursos assegurados:</div>
								<div class="column"><progress class="progress is-danger" value="16" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Recursos executados:</div>
								<div class="column"><progress class="progress is-danger" value="17" max="100">90%</progress></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="column">
				<div class="card">
					<header class="card-header">
						<p class="card-header-title">
							Financiamento
						</p>
					</header>
					<div class="card-content">
						<div class="content">
							<div class="columns">
								<div class="column is-one-third">Status total:</div>
								<div class="column"><progress class="progress is-danger" value="10" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Ações executadas:</div>
								<div class="column"><progress class="progress is-danger" value="15" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Ações iniciadas:</div>
								<div class="column"><progress class="progress is-danger" value="12" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Recursos assegurados:</div>
								<div class="column"><progress class="progress is-danger" value="16" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Recursos executados:</div>
								<div class="column"><progress class="progress is-danger" value="17" max="100">90%</progress></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
