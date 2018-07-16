@extends('layouts.app')

@section('content')
<section class="section has-background-primary">
	<div class="container">

		<div class="columns is-centered is-vcentered">
			<div class="column is-4 content contato-title-container">
				<div class="contato-circle-1"></div>
				<div class="contato-bar"></div>
				<h1 class="entre-contato">Entre em <span class="has-text-weight-bold is-underlined-dashed-white">Contato</span></h1>
				<p class="has-text-weight-semibold has-margin-top-500">Qualquer dúvida, envie um email para bhemciclo@gmail.com ou preencha o formulário:</p>
			</div>
			<form class="column is-4 is-offset-2 contato-form-container" method="POST" action="/contato">

				<div class="contato-circle-2"></div>

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

				<div class="field">
					<label class="label has-text-weight-semibold">Mensagem</label>
					<div class="control">
						<textarea class="textarea{{ session('success') ? ' is-success' : '' }}{{ $errors->has('mensagem') ? ' is-danger' : '' }}" id="mensagem" name="mensagem"></textarea>
					</div>
					@if (session('success'))<p class="help is-success">Mensagem enviada com sucesso!</p>@endif
					@if ($errors->has('mensagem'))<p class="help is-danger">Por favor, digite uma mensagem</p>@endif
				</div>

				<div class="field is-pulled-right">
					<div class="control">
						<button type="submit" class="button is-danger has-text-weight-semibold">Enviar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<div class="divider is-dark"></div>

@endsection
