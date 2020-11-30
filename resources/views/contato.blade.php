@extends('layouts.app')

@section('content')
<section class="section has-background-primary">
	<div class="container">

		<div class="columns is-centered is-vcentered">
			<div class="column is-4 content contato-title-container" data-aos="fade-right">
				<div class="contato-circle-1"></div>
				<div class="contato-bar"></div>
				<h1 class="entre-contato">Entre em <span class="has-text-weight-bold is-underlined-dashed-white">Contato</span></h1>
				<p class="has-text-weight-semibold has-margin-top-500">Qualquer dúvida, envie um email para bhemciclo@gmail.com ou preencha o formulário:</p>
			</div>
			<form class="column is-4 is-offset-2 contato-form-container" method="POST" action="/contato"  data-aos="fade-left">

				<div class="contato-circle-2"></div>

				{{ csrf_field() }}
				<div class="field">
					<label class="label has-text-weight-semibold">Nome</label>
					<div class="control">
						<input class="input{{ $errors->has('nome') ? ' is-dark' : '' }}" type="text" id="nome" name="nome" value="{{ old('nome') }}">
					</div>
					@if ($errors->has('nome'))<p class="help is-dark has-text-weight-semibold">Por favor, digite seu nome</p>@endif
				</div>

				<div class="field">
					<label class="label has-text-weight-semibold">Email</label>
					<div class="control">
						<input class="input{{ $errors->has('email') ? ' is-dark' : '' }}" type="email" id="email" name="email" value="{{ old('email') }}">
					</div>
					@if ($errors->has('email'))<p class="help is-dark has-text-weight-semibold">Por favor, digite um e-mail válido</p>@endif

				</div>

				<div class="field">
					<label class="label has-text-weight-semibold">Mensagem</label>
					<div class="control">
						<textarea class="textarea{{ session('success') ? ' is-danger' : '' }}{{ $errors->has('mensagem') ? ' is-dark' : '' }}" id="mensagem" name="mensagem" value="{{ old('mensagem') }}"></textarea>
					</div>
					@if (session('success'))<p class="help is-danger has-text-weight-semibold">Mensagem enviada com sucesso!</p>@endif
					@if ($errors->has('mensagem'))<p class="help is-dark has-text-weight-semibold">Por favor, digite uma mensagem</p>@endif
				</div>

				<div class="field field-message">
					<label class="label" for="message" value="{{ old('message') }}">Deixe vazio</label>
					<div class="control">
						<input id="message" name="message" value="{{ old('message') }}" />
					</div>
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
