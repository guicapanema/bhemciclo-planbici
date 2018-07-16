@extends('layouts.app')

@section('content')
	<section class="section has-background-warning">
		<div class="container content has-text-centered">
			<h1 class="title is-size-1">
				<span class="participe-title">
					Pa<span class="is-underlined-success">rticipe</span> e Cobre
					<img src="/img/participe/triangulo.png"></img>
				</span>
			</h1>
		</div>
	</section>

	<div class="divider is-danger"></div>

	<section class="section">
		<div class="container">
			<div class="columns">
				<div class="column content acompanhe">
					<h2 class="title is-double-spaced"><span class="is-underlined-warning">Acompanhe</span> as ações da BH em Ciclo</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et ullamcorper nulla. Quisque mollis, purus at porttitor mollis, nunc orci euismod neque, sit amet varius dui erat bibendum nisl.</p>
				</div>
				<div class="column content apoie">
					<h2 class="title is-double-spaced">Faça um <span class="is-underlined-success">vídeo pessoal</span> de apoio ao PlanBici</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et ullamcorper nulla. Quisque mollis, purus at porttitor mollis, nunc orci euismod neque, sit amet varius dui erat bibendum nisl.</p>
				</div>
			</div>

			<div class="columns">
				<div class="column content engaje">
					<h2 class="title is-double-spaced"><span class="is-underlined-primary">Engaje</span> seus amigos e familiares</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et ullamcorper nulla. Quisque mollis, purus at porttitor mollis, nunc orci euismod neque, sit amet varius dui erat bibendum nisl.</p>
				</div>
				<div class="column content participe">
					<h2 class="title is-double-spaced"><span class="is-underlined-danger">Participe</span> do GT Pedala BH</h2>
					<p>As reuniões do GT acontecem todos os meses, sempre na primeira quarta-feira do mês, das 18h às 21h (máximo), no CRJ - Centro de Referência da Juventude (Praça da Estação). Acesse <a href="https://drive.google.com/drive/folders/0B1LzhkQWFaicTkFrY3Z2emdEMEE" target="_blank">AQUI</a> as atas das últimas reuniões.</p>
					<span class="icon is-large has-text-success">
						<i class="fas fa-3x fa-plus-circle"></i>
					</span>
				</div>
			</div>

			<div class="columns">
				<div class="column content email">
					<h2 class="title is-double-spaced">Envie um email para o <span class="is-underlined-info">seu vereador</span></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et ullamcorper nulla. Quisque mollis, purus at porttitor mollis, nunc orci euismod neque, sit amet varius dui erat bibendum nisl.</p>
				</div>
				<form class="column content receba" method="POST" action="/contato">
					<h2 class="title is-double-spaced">
						<span class="receba-noticias">Receba notícias</span> sobre o PlanBici
					</h2>
					{{ csrf_field() }}
					<div class="field">
						<label class="label has-text-weight-semibold">Nome</label>
						<div class="control">
							<input class="input{{ $errors->has('nome') ? ' is-danger' : '' }}" type="text" id="nome" name="nome">
						</div>
						@if ($errors->has('nome'))<p class="help is-danger">Por favor, digite seu nome</p>@endif
					</div>

					<div class="field">
						<label class="label has-text-weight-semibold">Email</label>
						<div class="control">
							<input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" type="email" id="email" name="email">
						</div>
						@if ($errors->has('email'))<p class="help is-danger">Por favor, digite um e-mail válido</p>@endif
					</div>

					<div class="field is-pulled-right">
						<div class="control">
							<button type="submit" class="button is-warning">Cadastrar</button>
						</div>
					</div>
					<img class="receba-bg" src="/img/participe/receba.png"></img>
				</form>
			</div>
		</div>
	</section>

	<div class="divider is-success"></div>

	<section class="section has-background-grey-light">
		<div class="container has-text-centered">
			<div class="columns is-centered">
				<div class="column is-8 content">
					<h1 class="is-size-1">
						<span class="is-underlined-dashed-danger">
							PlanBici no Legislativo
						</span>
					</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et ullamcorper nulla. Quisque mollis, purus at porttitor mollis, nunc orci euismod neque, sit amet varius dui erat bibendum nisl.</p>
				</div>
			</div>
		</div>

		<legislativo class="has-margin-top-200"></legislativo>
	</section>

	<div class="divider is-warning"></div>

	<section class="section has-background-success">
		<div class="container content">
			<div class="columns">
				<div class="column is-half">
					<h1 class="faca-barulho">
						Faça<br />
						<span class="barulho is-uppercase has-text-white">
							ba<br />
							ru<br />
							lho!<br />
						</span>
						<img class="barulho-bg" src="/img/participe/barulho.png"></img>
					</h1>
					<a class="button is-large is-dark has-text-weight-semibold cobre">Cobre da prefeitura!</a>
				</div>

				<div class="column is-half">
					<div class="columns is-multiline is-mobile">
						<div class="column is-half">
							<div class="card has-background-info">
								<div class="card-content">
									<p>
										<span class="has-text-weight-semibold">#euqueroPlanBici</span> para Belo Horizonte ter uma mobilidade urbana de baixas emissões! www.d1passo.org
									</p>
								</div>
								<footer class="card-footer">
									<div class="card-footer-item social-share has-text-weight-semibold">
										Poste no
										<div>
											<a href="https://twitter.com/codinghorror/status/506010907021828096" target="_blank" class="has-text-dark">
												<span class="icon is-medium">
													<i class="fab fa-lg fa-facebook"></i>
												</span>
											</a>
											<a href="https://twitter.com/codinghorror/status/506010907021828096" target="_blank" class="has-text-dark">
												<span class="icon is-medium">
													<i class="fab fa-lg fa-twitter"></i>
												</span>
											</a>
										</div>
									</div>
								</footer>
							</div>
						</div>

						<div class="column is-half">
							<div class="card has-background-info">
								<div class="card-content">
									<p>
										Você pode colaborar com a mobilidade urbana de Belo Horizonte! Diga <span class="has-text-weight-semibold">#euqueroPlanBici</span>!
									</p>
								</div>
								<footer class="card-footer">
									<div class="card-footer-item social-share has-text-weight-semibold">
										Poste no
										<div>
											<a href="https://twitter.com/codinghorror/status/506010907021828096" target="_blank" class="has-text-dark">
												<span class="icon is-medium">
													<i class="fab fa-lg fa-facebook"></i>
												</span>
											</a>
											<a href="https://twitter.com/codinghorror/status/506010907021828096" target="_blank" class="has-text-dark">
												<span class="icon is-medium">
													<i class="fab fa-lg fa-twitter"></i>
												</span>
											</a>
										</div>
									</div>
								</footer>
							</div>
						</div>

						<div class="column is-half">
							<div class="card has-background-info">
								<div class="card-content">
									<p>
										BH merece dar um passo adiante e você pode ajudar a cidade nisso! Como? Apoiando o <span class="has-text-weight-semibold">#PlanBici</span>
									</p>
								</div>
								<footer class="card-footer">
									<div class="card-footer-item social-share has-text-weight-semibold">
										Poste no
										<div>
											<a href="https://twitter.com/codinghorror/status/506010907021828096" target="_blank" class="has-text-dark">
												<span class="icon is-medium">
													<i class="fab fa-lg fa-facebook"></i>
												</span>
											</a>
											<a href="https://twitter.com/codinghorror/status/506010907021828096" target="_blank" class="has-text-dark">
												<span class="icon is-medium">
													<i class="fab fa-lg fa-twitter"></i>
												</span>
											</a>
										</div>
									</div>
								</footer>
							</div>
						</div>

						<div class="column is-half">
							<div class="card has-background-info">
								<div class="card-content">
									<p>
										Quer melhorias na mobilidade urbana de BH? Então você quer <span class="has-text-weight-semibold">#PlanBici</span>!
									</p>
								</div>
								<footer class="card-footer">
									<div class="card-footer-item social-share has-text-weight-semibold">
										Poste no
										<div>
											<a href="https://twitter.com/codinghorror/status/506010907021828096" target="_blank" class="has-text-dark">
												<span class="icon is-medium">
													<i class="fab fa-lg fa-facebook"></i>
												</span>
											</a>
											<a href="https://twitter.com/codinghorror/status/506010907021828096" target="_blank" class="has-text-dark">
												<span class="icon is-medium">
													<i class="fab fa-lg fa-twitter"></i>
												</span>
											</a>
										</div>
									</div>
								</footer>
							</div>
						</div>

						<div class="column is-half">
							<div class="card has-background-info">
								<div class="card-content">
									<p>
										BH tem a 2ª maior frota de veículos do Brasil. Como mudar a realidade do trânsito? Com <span class="has-text-weight-semibold">#PlanBici</span>
									</p>
								</div>
								<footer class="card-footer">
									<div class="card-footer-item social-share has-text-weight-semibold">
										Poste no
										<div>
											<a href="https://twitter.com/codinghorror/status/506010907021828096" target="_blank" class="has-text-dark">
												<span class="icon is-medium">
													<i class="fab fa-lg fa-facebook"></i>
												</span>
											</a>
											<a href="https://twitter.com/codinghorror/status/506010907021828096" target="_blank" class="has-text-dark">
												<span class="icon is-medium">
													<i class="fab fa-lg fa-twitter"></i>
												</span>
											</a>
										</div>
									</div>
								</footer>
							</div>
						</div>

						<div class="column is-half">
							<div class="card has-background-info">
								<div class="card-content">
									<p>
										A frota de veículos de BH aumentou 100% de 2005 a 2015! Quer melhorar a mobilidade urbana da cidade? <span class="has-text-weight-semibold">#D1Passo</span> www.d1passo.org
									</p>
								</div>
								<footer class="card-footer">
									<div class="card-footer-item social-share has-text-weight-semibold">
										Poste no
										<div>
											<a href="https://twitter.com/codinghorror/status/506010907021828096" target="_blank" class="has-text-dark">
												<span class="icon is-medium">
													<i class="fab fa-lg fa-facebook"></i>
												</span>
											</a>
											<a href="https://twitter.com/codinghorror/status/506010907021828096" target="_blank" class="has-text-dark">
												<span class="icon is-medium">
													<i class="fab fa-lg fa-twitter"></i>
												</span>
											</a>
										</div>
									</div>
								</footer>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="divider is-dark"></div>

@endsection
