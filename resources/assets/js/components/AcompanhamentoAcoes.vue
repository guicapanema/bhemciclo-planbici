<template>
	<div>
		<div class="box">
			<div class="field is-grouped is-grouped-centered is-grouped-multiline">

				<div class="control has-icons-left">
					<span class="select">
						<select>
							<option selected>Todos os anos</option>
							<option>Select dropdown</option>
							<option>With options</option>
						</select>
					</span>
					<span class="icon is-small is-left">
						<i class="far fa-calendar"></i>
					</span>
				</div>
				<div class="control has-icons-left">
					<span class="select">
						<select>
							<option selected>Todos os eixos</option>
							<option>Select dropdown</option>
							<option>With options</option>
						</select>
					</span>
					<span class="icon is-small is-left">
						<i class="fas fa-th-large"></i>
					</span>
				</div>
				<div class="control has-icons-left">
					<span class="select">
						<select>
							<option selected>Qualquer status</option>
							<option>Select dropdown</option>
							<option>With options</option>
						</select>
					</span>
					<span class="icon is-small is-left">
						<i class="fas fa-thermometer-half"></i>
					</span>
				</div>
				<div class="control has-icons-left">
					<input class="input" type="text" placeholder="Buscar...">
					<span class="icon is-small is-left">
						<i class="fas fa-search fa-xs"></i>
					</span>
				</div>
			</div>
		</div>
		<div v-for="axis of axes">
			<div class="content">
				<h4>{{ axis.name }}</h4>
			</div>
			<div class="columns is-multiline">
				<div v-for="action of axis.actions" class="column is-half">
					<div class="card">
						<header class="card-header">
							<p class="card-header-title">
								{{ action.name }}
							</p>
						</header>
						<div class="card-content">
							<div class="columns is-mobile has-text-centered">
								<div class="column">
									<div>
										<span class="icon is-medium has-text-info">
											<i class="far fa-lg fa-calendar"></i>
										</span>
										Data de início
									</div>
									<div class="columns">
										<div class="column">
											<strong><small>Prevista:</small></strong><br />
											{{ action.start_date_forecast }}
										</div>
										<div class="column">
											<strong><small>Real:</small></strong><br />
											{{ action.start_date_real ? action.start_date_real : 'Não iniciada' }}
										</div>
									</div>
								</div>
								<div class="column">
									<div>
										<span class="icon is-medium has-text-info">
											<i class="far fa-lg fa-calendar-check"></i>
										</span>
										Data de término
									</div>
									<div class="columns">
										<div class="column">
											<strong><small>Prevista:</small></strong><br />
											{{ action.end_date_forecast }}
										</div>
										<div class="column">
											<strong><small>Real:</small></strong><br />
											{{ action.end_date_real ? action.end_date_real : 'Não finalizada' }}
										</div>
									</div>
								</div>
							</div>
							<div class="has-text-centered">
								<span class="icon is-medium has-text-info">
									<i class="far fa-lg fa-money-bill-alt"></i>
								</span>
								Recursos financeiros
								<div class="columns is-mobile">
									<div class="column">
										<strong><small>Valor previsto:</small></strong><br />
										R$ {{ action.amount_forecast }}
									</div>
									<div class="column">
										<strong><small>Recurso garantido:</small></strong><br />
										R$ {{ action.amount_budgeted }}
									</div>
									<div class="column">
										<strong><small>Recurso investido:</small></strong><br />
										R$ {{ action.amount_invested }}
									</div>
								</div>
							</div>
							<div class="has-text-centered">
								<span class="icon is-medium has-text-info">
									<i class="fas fa-lg fa-tasks"></i>
								</span>
								Execução
								<div class="columns is-mobile">
									<div class="column">
										<strong><small>Quantidade prevista:</small></strong><br />
										{{ action.quantity_forecast + ' ' + action.quantity_unit }}
									</div>
									<div class="column">
										<strong><small>Quantidade executada:</small></strong><br />
										{{ action.quantity_real + ' ' + action.quantity_unit }}
									</div>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {

		props: ['axes'],

		data() {
			return {
			}
		},

		computed: {
		},

		mounted() {
		},

		methods: {
		}
	}
</script>
