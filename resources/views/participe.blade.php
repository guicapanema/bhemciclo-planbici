@extends('layouts.app')

@section('content')
<section class="section">
	<div class="container">
		<div class="columns">
			<div class="column content">
				<h2>ACOMPANHE as ações da BH em Ciclo</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et ullamcorper nulla. Quisque mollis, purus at porttitor mollis, nunc orci euismod neque, sit amet varius dui erat bibendum nisl.</p>
			</div>
			<form class="column content" method="POST" action="/contato">
				<h2>RECEBA notícias sobre o PlanBici</h2>
				{{ csrf_field() }}
				<div class="field">
					<label class="label">Nome</label>
					<div class="control has-icons-left">
						<input class="input{{ $errors->has('nome') ? ' is-danger' : '' }}" type="text" id="nome" name="nome" placeholder="Digite seu nome">
						<span class="icon is-small is-left">
							<i class="fas fa-user"></i>
						</span>
					</div>
					@if ($errors->has('nome'))<p class="help is-danger">Por favor, digite seu nome</p>@endif
				</div>

				<div class="field">
					<label class="label">Email</label>
					<div class="control has-icons-left">
						<input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" type="email" id="email" name="email" placeholder="Digite seu email">
						<span class="icon is-small is-left">
							<i class="fas fa-envelope"></i>
						</span>
					</div>
					@if ($errors->has('email'))<p class="help is-danger">Por favor, digite um e-mail válido</p>@endif

				</div>

				<div class="field is-pulled-right">
					<div class="control">
						<button type="submit" class="button is-warning">Cadastrar</button>
					</div>
				</div>
			</form>
		</div>

		<div class="columns">
			<div class="column content">
				<h2>FAÇA um vídeo pessoal de apoio ao PlanBici</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et ullamcorper nulla. Quisque mollis, purus at porttitor mollis, nunc orci euismod neque, sit amet varius dui erat bibendum nisl.</p>
			</div>
			<div class="column content">
				<h2>PARTICIPE do GT Pedala BH</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et ullamcorper nulla. Quisque mollis, purus at porttitor mollis, nunc orci euismod neque, sit amet varius dui erat bibendum nisl.</p>
			</div>
		</div>

		<div class="columns">
			<div class="column content">
				<h2>ENGAJE seus amigos e familiares</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et ullamcorper nulla. Quisque mollis, purus at porttitor mollis, nunc orci euismod neque, sit amet varius dui erat bibendum nisl.</p>
			</div>
			<div class="column content">
				<h2>Envie um email para o seu vereador</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et ullamcorper nulla. Quisque mollis, purus at porttitor mollis, nunc orci euismod neque, sit amet varius dui erat bibendum nisl.</p>
			</div>
		</div>
	</div>
</section>

<section class="section notification is-light">
	<div class="container">
		<div class="columns">
			<div class="column content">
				<h1 class="has-text-centered">PlanBici no Legislativo</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et ullamcorper nulla. Quisque mollis, purus at porttitor mollis, nunc orci euismod neque, sit amet varius dui erat bibendum nisl.</p>
			</div>
		</div>
	</div>

	<legislativo></legislativo>
</section>

<section class="section">
	<div class="content">
		<h1 class="has-text-centered">Faça barulho!</h1>
		<div class="has-text-centered"><a class="button is-large is-warning">Cobre da prefeitura</a></div>
	</div>

	<div class="columns">
		<div class="column">
			<div class="card">
				<div class="card-content">
					<p class="subtitle">
						#euqueroPlanBici para Belo Horizonte ter uma mobilidade urbana de baixas emissões! www.d1passo.org
					</p>
				</div>
				<footer class="card-footer">
					<p class="card-footer-item">
						<span>
							Postar no <a href="https://twitter.com/codinghorror/status/506010907021828096">Twitter</a>
						</span>
					</p>
					<p class="card-footer-item">
						<span>
							Postar no <a href="#">Facebook</a>
						</span>
					</p>
				</footer>
			</div>
		</div>

		<div class="column">
			<div class="card">
				<div class="card-content">
					<p class="subtitle">
						Você pode colaborar com a mobilidade urbana de Belo Horizonte! Diga #euqueroPlanBici!
					</p>
				</div>
				<footer class="card-footer">
					<p class="card-footer-item">
						<span>
							Postar no <a href="https://twitter.com/codinghorror/status/506010907021828096">Twitter</a>
						</span>
					</p>
					<p class="card-footer-item">
						<span>
							Postar no <a href="#">Facebook</a>
						</span>
					</p>
				</footer>
			</div>
		</div>

		<div class="column">
			<div class="card">
				<div class="card-content">
					<p class="subtitle">
						BH merece dar um passo adiante e você pode ajudar a cidade nisso! Como? Apoiando o #PlanBici
					</p>
				</div>
				<footer class="card-footer">
					<p class="card-footer-item">
						<span>
							Postar no <a href="https://twitter.com/codinghorror/status/506010907021828096">Twitter</a>
						</span>
					</p>
					<p class="card-footer-item">
						<span>
							Postar no <a href="#">Facebook</a>
						</span>
					</p>
				</footer>
			</div>
		</div>
	</div>

	<div class="columns">
		<div class="column">
			<div class="card">
				<div class="card-content">
					<p class="subtitle">
						Quer melhorias na mobilidade urbana de BH? Então você quer #PlanBici!
					</p>
				</div>
				<footer class="card-footer">
					<p class="card-footer-item">
						<span>
							Postar no <a href="https://twitter.com/codinghorror/status/506010907021828096">Twitter</a>
						</span>
					</p>
					<p class="card-footer-item">
						<span>
							Postar no <a href="#">Facebook</a>
						</span>
					</p>
				</footer>
			</div>
		</div>

		<div class="column">
			<div class="card">
				<div class="card-content">
					<p class="subtitle">
						BH tem a 2ª maior frota de veículos do Brasil. Como mudar a realidade do trânsito? Com #PlanBici
					</p>
				</div>
				<footer class="card-footer">
					<p class="card-footer-item">
						<span>
							Postar no <a href="https://twitter.com/codinghorror/status/506010907021828096">Twitter</a>
						</span>
					</p>
					<p class="card-footer-item">
						<span>
							Postar no <a href="#">Facebook</a>
						</span>
					</p>
				</footer>
			</div>
		</div>

		<div class="column">
			<div class="card">
				<div class="card-content">
					<p class="subtitle">
						A frota de veículos de BH aumentou 100% de 2005 a 2015! Quer melhorar a mobilidade urbana da cidade? #D1Passo www.d1passo.org
					</p>
				</div>
				<footer class="card-footer">
					<p class="card-footer-item">
						<span>
							Postar no <a href="https://twitter.com/codinghorror/status/506010907021828096">Twitter</a>
						</span>
					</p>
					<p class="card-footer-item">
						<span>
							Postar no <a href="#">Facebook</a>
						</span>
					</p>
				</footer>
			</div>
		</div>
	</div>
</section>
@endsection
