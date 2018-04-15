<template>
	<div>
		<div class="box">
			<div class="field is-grouped is-grouped-centered is-grouped-multiline">

				<div class="control has-icons-left">
					<span class="select">
						<select v-model="filterYear">
							<option :value="null">Todos os anos</option>
							<option v-for="year of availableYears" :value="year">{{ year }}</option>
						</select>
					</span>
					<span class="icon is-small is-left">
						<i class="far fa-calendar"></i>
					</span>
				</div>
				<div class="control has-icons-left">
					<span class="select">
						<select v-model="filterAxis">
							<option :value="null">Todos os eixos</option>
							<option v-for="axis of availableAxes" :value="axis">{{ axis }}</option>
						</select>
					</span>
					<span class="icon is-small is-left">
						<i class="fas fa-th-large"></i>
					</span>
				</div>
				<div class="control has-icons-left">
					<span class="select">
						<select v-model="filterStatus">
							<option :value="null">Qualquer status</option>
							<option v-for="status of availableStatuses" :value="status">{{ status }}</option>
						</select>
					</span>
					<span class="icon is-small is-left">
						<i class="fas fa-thermometer-half"></i>
					</span>
				</div>
				<div class="control has-icons-left">
					<input v-model="filterSearch" class="input" type="text" placeholder="Buscar...">
					<span class="icon is-small is-left">
						<i class="fas fa-search fa-xs"></i>
					</span>
				</div>
			</div>
		</div>
		<div v-for="axis of displayedAxes">
			<div class="content">
				<h4>{{ axis.name }}</h4>
			</div>
			<div class="columns is-multiline">
				<div v-for="action of displayedActions(axis)" class="column is-half">
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

		props: ['actions', 'axes'],

		data() {
			return {
				availableYears: [2017, 2018, 2019, 2020],
				availableStatuses: ['No prazo', 'Início atrasado', 'Término atrasado', 'Concluída', 'Prevista'],
				filterAxis: null,
				filterYear: null,
				filterStatus: null,
				filterSearch: ''
			}
		},

		computed: {
			availableAxes() {
				let axes = [];
				for(let axis of this.axes) {
					axes.push(axis.name);
				}
				return axes
			},
			displayedAxes() {
				if (!this.filterAxis) {
					return this.axes;
				} else {
					return this.axes.filter(axis => axis.name === this.filterAxis);
				}
			}
		},

		mounted() {
		},

		methods: {
			displayedActions(axis) {
				return axis.actions.filter(action => {
					let matchYear = true;
					let matchStatus = true;
					let matchSearch = true;

					if (this.filterYear) {
						let startDate = moment(action.start_date_forecast);
						let endDate = moment(action.end_date_forecast);
						matchYear = (startDate.year() <= this.filterYear) && (this.filterYear <= endDate.year());
					}

					if (this.filterStatus) {
						matchStatus = this.filterStatus === this.getStatus(action);
					}

					if (this.filterSearch.length) {
						matchSearch = JSON.stringify(action).toLowerCase().indexOf(this.filterSearch.trim().toLowerCase()) >= 0;
					}

					return matchYear && matchStatus && matchSearch
				});
			},
			getStatus(action) {
				if (moment(action.end_date_forecast).isAfter(this.selectedDate)) { // No prazo
					return this.availableStatuses[0];
				} else if (moment(action.start_date_forecast).isBefore(this.selectedDate) &&
					(!action.start_date_real || moment(action.start_date_real).isAfter(this.selectedDate))) { // Início atrasado
						return this.availableStatuses[1];
				} else if (moment(action.end_date_forecast).isBefore(this.selectedDate) &&
					(!action.end_date_real || moment(action.end_date_real).isAfter(this.selectedDate))) { // Término atrasado
						return this.availableStatuses[2];
				} else if (moment(action.end_date_real).isSameOrBefore(this.selectedDate)) { // Concluída
						return this.availableStatuses[3];
				} else if (moment(action.start_date_forecast).isSameOrAfter(this.selectedDate) &&
					(!action.start_date_real || moment(action.start_date_real).isAfter(this.selectedDate))) { // Prevista
						return this.availableStatuses[4];
				}
			}
		}
	}
</script>
