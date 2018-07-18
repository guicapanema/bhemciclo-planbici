@extends('layouts.app')

@section('content')
	<section class="section has-background-warning">
		<div class="container content has-text-centered" data-aos="fade-up">
			<h1 class="title is-size-1 is-double-spaced">
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
				<div class="column content acompanhe" data-aos="fade-right">
					<h2 class="title is-double-spaced"><span class="is-underlined-warning">Acompanhe</span> as ações da BH em Ciclo</h2>
					<ul>
						<li><a href="https://www.facebook.com/bhemciclo/" target="_blank" class="has-text-weight-semibold">https://www.facebook.com/bhemciclo/</a></li>
						<li><a href="https://twitter.com/bhemciclo" target="_blank" class="has-text-weight-semibold">https://twitter.com/bhemciclo</a></li>
						<li><a href="https://www.instagram.com/bhemciclo/" target="_blank" class="has-text-weight-semibold">https://www.instagram.com/bhemciclo/</a></li>
						<li><a href="https://t.me/bhemciclo" target="_blank" class="has-text-weight-semibold">https://t.me/bhemciclo</a></li>
					</ul>
				</div>
				<div class="column content apoie" data-aos="fade-left">
					<h2 class="title is-double-spaced">Faça um <span class="is-underlined-success">vídeo pessoal</span> de apoio ao PlanBici</h2>
					<p>Com o celular na posição horizontal, com a câmera apontada para a sua esquerda, grave um vídeo de ATÉ 45 segundos.</p>
					<ul>
						<li>Se identifique com nome, região da cidade onde mora e há quanto tempo pedala.</li>
						<li>Diga o que achar interessante sobre experiências de pedalar em BH, o que você que está bom, o que pode melhorar, etc.</li>
					</ul>
					<p>Envie o vídeo para <a href="mailto:bhemciclo@gmail.com" class="has-text-weight-semibold">bhemciclo@gmail.com</a></p>
				</div>
			</div>

			<div class="columns">
				<div class="column content email" data-aos="fade-right">
					<h2 class="title is-double-spaced">Envie um email para o <span class="is-underlined-info">seu vereador</span></h2>
					<p>cobrando dele o <a href="https://docs.google.com/document/d/1yLdObfZ3cH2rhJ-Z7WZbxsAOivEMHV_qvscn8fWdxHI/edit" target="_blank" class="has-text-weight-semibold">apoio ao PlanBici</a>.</p>
				</div>
				<div class="column content participe" data-aos="fade-left">
					<h2 class="title is-double-spaced"><span class="is-underlined-danger">Participe</span> do GT Pedala BH</h2>
					<p>As reuniões do GT acontecem todos os meses, sempre na primeira quarta-feira do mês, das 18h às 21h (máximo), no CRJ - Centro de Referência da Juventude (Praça da Estação). Acesse <a href="https://drive.google.com/drive/folders/0B1LzhkQWFaicTkFrY3Z2emdEMEE" target="_blank" class="has-text-weight-semibold">AQUI</a> as atas das últimas reuniões.</p>
					<img src="/img/participe/participe.png"></img>
				</div>
			</div>

			<div class="columns">
				<div class="column content engaje" data-aos="fade-right">
					<h2 class="title is-double-spaced"><span class="is-underlined-primary">Engaje</span> seus amigos e familiares</h2>
					<p>Sua empresa, organização, escola, sindicato quer apoiar?</p>
					<ul>
						<li>Organize <a href="http://bikeanjo.org/2011/07/27/pegue-um-bonde-para-a-bicicletada-de-sao-paulo/" target="_blank" class="has-text-weight-semibold">Bondes de Bike</a> para o trabalho ou para seus eventos;</li>
						<li>Organize um Café da Manhã para quem chegar a pé, de bicicleta, carona ou transporte público como <a href="http://bikeelegal.com/de-bike-ao-trabalho-cafe-da-manha-dos-ciclistas/" target="_blank" class="has-text-weight-semibold">ESTE AQUI</a>;</li>
						<li>Distribua uma Cartilha de Dicas para seus funcionários como ESTAS AQUI;</li>
						<li>Dialogue com os demais funcionários sobre a ampliação da infraestrutura do seu escritório para ciclistas e pedestre, como um <a href="http://ciclovivo.com.br/arq-urb/mobilidade/com-mais-ciclistas-predio-comercial-amplia-bicicletario-em-sp/" target="_blank" class="has-text-weight-semibold">Bicicletário</a> ou um Vestiário;</li>
						<li>Organize um evento para discutir a mobilidade na sua empresa como <a href="http://nossasaopaulo.org.br/agenda-cidada/debate-bike-na-cidade-de-sao-paulo" target="_blank" class="has-text-weight-semibold">ESTE AQUI</a>;</li>
						<li>Elabore uma Pesquisa com seus funcionários, como <a href="http://transporteativo.org.br/ta/?page_id=11178" target="_blank" class="has-text-weight-semibold">Contagem de Ciclistas</a> ou <a href="https://issuu.com/cidadeativa/docs/150821_ca_relatorio_paulistaaberta" target="_blank" class="has-text-weight-semibold">Painéis Interativos</a>;</li>
						<li>Use a <span class="has-text-weight-semibold">#EuQueroPlanBici</span> em suas postagens.</li>
					</ul>
				</div>
				<form class="column content receba" method="POST" action="https://bhemciclo.us3.list-manage.com/subscribe/post" data-aos="fade-left">
					<h2 class="title is-double-spaced">
						<span class="receba-noticias">Receba notícias</span> sobre o PlanBici
					</h2>
					<input name="u" value="23a54654e5a7e4717dac871db" type="hidden">
					<input name="id" value="b9e375b688" type="hidden">
					<div class="field">
						<label class="label has-text-weight-semibold">Nome</label>
						<div class="control">
							<input class="input{{ $errors->has('nome') ? ' is-danger' : '' }}" type="text" id="MERGE1" name="MERGE1">
						</div>
						@if ($errors->has('nome'))<p class="help is-danger">Por favor, digite seu nome</p>@endif
					</div>

					<div class="field">
						<label class="label has-text-weight-semibold">Email</label>
						<div class="control">
							<input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" type="email" id="MERGE0" name="MERGE0">
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
		<div class="container has-text-centered" data-aos="fade-down">
			<div class="columns is-centered">
				<div class="column is-8 content">
					<h1 class="is-size-1">
						<span class="is-underlined-dashed-danger">
							PlanBici no Legislativo
						</span>
					</h1>
					<p>Abaixo, os vereadores que até agora mostraram apoio ao PlanBici:</p>
				</div>
			</div>
		</div>

		<legislativo class="has-margin-top-200"></legislativo>
	</section>

	<div class="divider is-warning"></div>

	<section class="section has-background-success">
		<div class="container content">
			<div class="columns">
				<div class="column is-half" data-aos="fade-right">
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
						<div class="column is-12-mobile is-half-tablet" data-aos="flip-left">
							<div class="card has-background-info">
								<div class="card-content">
									<p>
										<span class="has-text-weight-semibold">#euqueroPlanBici</span> para Belo Horizonte ter uma mobilidade urbana de baixas emissões! www.planbicibh.org
									</p>
								</div>
								<footer class="card-footer">
									<div class="card-footer-item social-share has-text-weight-semibold">
										Poste no
										<div>
											<a href="http://www.facebook.com/dialog/feed?app_id=1494506613987985&display=popup&href=https%3A%2F%2Fplanbicibh.org&redirect_uri=https%3A%2F%2Fplanbicibh.org" target="_blank" class="has-text-dark">
												<span class="icon is-medium">
													<i class="fab fa-lg fa-facebook"></i>
												</span>
											</a>
											<a href="https://twitter.com/intent/tweet?text=%23euqueroPlanBici%20para%20Belo%20Horizonte%20ter%20uma%20mobilidade%20urbana%20de%20baixas%20emiss%C3%B5es!%20www.planbicibh.org" target="_blank" class="has-text-dark">
												<span class="icon is-medium">
													<i class="fab fa-lg fa-twitter"></i>
												</span>
											</a>
										</div>
									</div>
								</footer>
							</div>
						</div>

						<div class="column is-12-mobile is-half-tablet" data-aos="flip-right">
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
											<a href="http://www.facebook.com/dialog/feed?app_id=1494506613987985&display=popup&href=https%3A%2F%2Fplanbicibh.org&redirect_uri=https%3A%2F%2Fplanbicibh.org" target="_blank" class="has-text-dark">
												<span class="icon is-medium">
													<i class="fab fa-lg fa-facebook"></i>
												</span>
											</a>
											<a href="https://twitter.com/intent/tweet?text=Voc%C3%AA%20pode%20colaborar%20com%20a%20mobilidade%20urbana%20de%20Belo%20Horizonte!%20Diga%20%23euqueroPlanBici!" target="_blank" class="has-text-dark">
												<span class="icon is-medium">
													<i class="fab fa-lg fa-twitter"></i>
												</span>
											</a>
										</div>
									</div>
								</footer>
							</div>
						</div>

						<div class="column is-12-mobile is-half-tablet" data-aos="flip-left">
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
											<a href="http://www.facebook.com/dialog/feed?app_id=1494506613987985&display=popup&href=https%3A%2F%2Fplanbicibh.org&redirect_uri=https%3A%2F%2Fplanbicibh.org" target="_blank" class="has-text-dark">
												<span class="icon is-medium">
													<i class="fab fa-lg fa-facebook"></i>
												</span>
											</a>
											<a href="https://twitter.com/intent/tweet?text=BH%20merece%20dar%20um%20passo%20adiante%20e%20voc%C3%AA%20pode%20ajudar%20a%20cidade%20nisso!%20Como%3F%20Apoiando%20o%20%23PlanBici" target="_blank" class="has-text-dark">
												<span class="icon is-medium">
													<i class="fab fa-lg fa-twitter"></i>
												</span>
											</a>
										</div>
									</div>
								</footer>
							</div>
						</div>

						<div class="column is-12-mobile is-half-tablet" data-aos="flip-right">
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
											<a href="http://www.facebook.com/dialog/feed?app_id=1494506613987985&display=popup&href=https%3A%2F%2Fplanbicibh.org&redirect_uri=https%3A%2F%2Fplanbicibh.org" target="_blank" class="has-text-dark">
												<span class="icon is-medium">
													<i class="fab fa-lg fa-facebook"></i>
												</span>
											</a>
											<a href="https://twitter.com/intent/tweet?text=Quer%20melhorias%20na%20mobilidade%20urbana%20de%20BH%3F%20Ent%C3%A3o%20voc%C3%AA%20quer%20%23PlanBici!" target="_blank" class="has-text-dark">
												<span class="icon is-medium">
													<i class="fab fa-lg fa-twitter"></i>
												</span>
											</a>
										</div>
									</div>
								</footer>
							</div>
						</div>

						<div class="column is-12-mobile is-half-tablet" data-aos="flip-left">
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
											<a href="http://www.facebook.com/dialog/feed?app_id=1494506613987985&display=popup&href=https%3A%2F%2Fplanbicibh.org&redirect_uri=https%3A%2F%2Fplanbicibh.org" target="_blank" class="has-text-dark">
												<span class="icon is-medium">
													<i class="fab fa-lg fa-facebook"></i>
												</span>
											</a>
											<a href="https://twitter.com/intent/tweet?text=BH%20tem%20a%202%C2%AA%20maior%20frota%20de%20ve%C3%ADculos%20do%20Brasil.%20Como%20mudar%20a%20realidade%20do%20tr%C3%A2nsito%3F%20Com%20%23PlanBici" target="_blank" class="has-text-dark">
												<span class="icon is-medium">
													<i class="fab fa-lg fa-twitter"></i>
												</span>
											</a>
										</div>
									</div>
								</footer>
							</div>
						</div>

						<div class="column is-12-mobile is-half-tablet" data-aos="flip-right">
							<div class="card has-background-info">
								<div class="card-content">
									<p>
										A frota de veículos de BH aumentou 100% de 2005 a 2015! Quer melhorar a mobilidade urbana da cidade? <span class="has-text-weight-semibold">#EuQueroPlanBici</span> www.planbicibh.org
									</p>
								</div>
								<footer class="card-footer">
									<div class="card-footer-item social-share has-text-weight-semibold">
										Poste no
										<div>
											<a href="http://www.facebook.com/dialog/feed?app_id=1494506613987985&display=popup&href=https%3A%2F%2Fplanbicibh.org&redirect_uri=https%3A%2F%2Fplanbicibh.org" target="_blank" class="has-text-dark">
												<span class="icon is-medium">
													<i class="fab fa-lg fa-facebook"></i>
												</span>
											</a>
											<a href="https://twitter.com/intent/tweet?text=A%20frota%20de%20ve%C3%ADculos%20de%20BH%20aumentou%20100%25%20de%202005%20a%202015!%20Quer%20melhorar%20a%20mobilidade%20urbana%20da%20cidade%3F%20%23EuQueroPlanBici%20www.planbicibh.org" target="_blank" class="has-text-dark">
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
