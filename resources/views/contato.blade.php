@extends('layouts.app')

@section('content')
<section class="section">
	<div class="container">
		<div class="columns is-vcentered">
			<div class="column is-one-third content">
				<h2>Entre em contato</h2>
				<p>Qualquer dúvida, envie e-mail para bhemciclo@gmail.com ou preencha o formulário:</p>
			</div>
			<form class="column is-two-thirds" method="POST" action="/contato">
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

				<div class="field">
					<label class="label">Mensagem</label>
					<div class="control">
						<textarea class="textarea{{ session('success') ? ' is-success' : '' }}{{ $errors->has('mensagem') ? ' is-danger' : '' }}" id="mensagem" name="mensagem" placeholder="Digite sua mensagem"></textarea>
					</div>
					@if (session('success'))<p class="help is-success">Mensagem enviada com sucesso!</p>@endif
					@if ($errors->has('mensagem'))<p class="help is-danger">Por favor, digite uma mensagem</p>@endif
				</div>

				<div class="field is-pulled-right">
					<div class="control">
						<button type="submit" class="button is-success">Enviar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
@endsection
