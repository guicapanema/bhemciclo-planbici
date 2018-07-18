<template>
	<div>
		<div class="box has-background-success">
			<div class="field">
				<div class="control has-icons-left">
					<input v-model="filterSearch" class="input" type="text" placeholder="Buscar...">
					<span class="icon is-small is-left">
						<i class="fas fa-search fa-xs"></i>
					</span>
				</div>
			</div>
			<div class="columns">
				<div class="column is-narrow">
					<label class="label has-text-weight-semibold">Ano de início</label>
					<div class="control">
						<span class="select">
							<select v-model="filterYear">
								<option :value="null">Todos</option>
								<option v-for="year of availableYears" :value="year">{{ year }}</option>
							</select>
						</span>
					</div>
				</div>

				<div class="column is-narrow">
					<label class="label has-text-weight-semibold">Eixo</label>
					<div class="control">
						<span class="select">
							<select v-model="filterAxis">
								<option :value="null">Todos</option>
								<option v-for="axis of availableAxes" :value="axis">{{ axis }}</option>
							</select>
						</span>
					</div>
				</div>

				<div class="column is-narrow">
					<label class="label has-text-weight-semibold">Status</label>
					<div class="control">
						<span class="select">
							<select v-model="filterStatus">
								<option :value="null">Todos</option>
								<option v-for="status of availableStatuses" :value="status">{{ status }}</option>
							</select>
						</span>
					</div>
				</div>

				<div class="column is-narrow">
					<label class="label has-text-weight-semibold">Atraso</label>
					<div class="control">
						<span class="select">
							<select v-model="filterDelay">
								<option :value="null">Todos</option>
								<option :value="false">Não atrasada</option>
								<option :value="true">Atrasada</option>
							</select>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div v-for="axis of displayedAxes">
			<div class="content">
				<h4 class="axis-divider has-text-weight-semibold is-uppercase">
					<img class="axis-icon" :src="'/img/planbici/' + axis.alias + '.png'"></img>
					{{ axis.name }}
				</h4>
			</div>
			<div class="columns is-multiline">
				<div v-for="action of displayedActions(axis)" class="column is-half">
					<div class="card action-card">
						<header class="card-header">
							<p class="card-header-title has-text-weight-semibold">
								{{ action.name }}
							</p>
						</header>
						<div class="card-content">
							<div class="columns is-mobile">
								<div class="column">
									<div class="has-text-danger has-text-weight-semibold">
										<span class="icon is-medium">
											<i class="far fa-lg fa-calendar"></i>
										</span>
										Data de início
									</div>
									<div class="columns">
										<div class="column">
											<strong><small>Prevista:</small></strong><br />
											{{ moment(action.start_date_forecast).format('DD/MM/YYYY') }}
										</div>
										<div class="column">
											<strong><small>Real:</small></strong><br />
											{{ action.start_date_real ? moment(action.start_date_real).format('DD/MM/YYYY') : 'Não iniciada' }}
										</div>
									</div>
								</div>
								<div class="column">
									<div class="has-text-danger has-text-weight-semibold">
										<span class="icon is-medium">
											<i class="far fa-lg fa-calendar-check"></i>
										</span>
										Data de término
									</div>
									<div class="columns">
										<div class="column">
											<strong><small>Prevista:</small></strong><br />
											{{ moment(action.end_date_forecast).format('DD/MM/YYYY') }}
										</div>
										<div class="column">
											<strong><small>Real:</small></strong><br />
											{{ action.end_date_real ? moment(action.end_date_real).format('DD/MM/YYYY') : 'Não finalizada' }}
										</div>
									</div>
								</div>
							</div>
							<div class="has-text-danger has-text-weight-semibold">
								<span class="icon is-medium">
									<i class="far fa-lg fa-money-bill-alt"></i>
								</span>
								Recursos financeiros
							</div>
							<div class="columns is-mobile">
								<div class="column">
									<strong><small>Valor previsto:</small></strong><br />
									{{ formatCurrency(action.amount_forecast) }}
								</div>
								<div class="column">
									<strong><small>Recurso garantido:</small></strong><br />
									{{ formatCurrency(action.amount_budgeted) }}
								</div>
								<div class="column">
									<strong><small>Recurso investido:</small></strong><br />
									{{ formatCurrency(action.amount_invested) }}
								</div>
							</div>
							<div class="has-text-danger has-text-weight-semibold">
								<span class="icon is-medium">
									<i class="fas fa-lg fa-tasks"></i>
								</span>
								Execução
							</div>
							<div class="columns is-mobile">
								<div class="column is-one-third">
									<strong><small>Quantidade prevista:</small></strong><br />
									{{ action.quantity_forecast ? action.quantity_forecast + ' ' + action.quantity_unit : '-' }}
								</div>
								<div class="column is-one-third">
									<strong><small>Quantidade executada:</small></strong><br />
									{{ action.quantity_forecast ? action.quantity_real + ' ' + action.quantity_unit : '-' }}
								</div>
							</div>
						</div>
						<img v-if="getDelay(action)" src="/img/planbici/atrasado.png" class="delayed"></img>
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
				availableStatuses: ['Não iniciada', 'Em andamento', 'Concluída'],
				filterAxis: null,
				filterYear: null,
				filterStatus: null,
				filterDelay: null,
				filterSearch: '',
				currentDate: moment()
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
					let matchDelay = true;
					let matchStatus = true;
					let matchSearch = true;
					let matchYear = true;

					if (this.filterDelay !== null) {
						matchDelay = this.filterDelay === this.getDelay(action);
					}
					if (this.filterSearch.length) {
						matchSearch = JSON.stringify(action).toLowerCase().indexOf(this.filterSearch.trim().toLowerCase()) >= 0;
					}
					if (this.filterStatus) {
						matchStatus = this.filterStatus === this.getStatus(action);
					}
					if (this.filterYear) {
						let startDate = moment(action.start_date_forecast);
						let endDate = moment(action.end_date_forecast);
						matchYear = (startDate.year() <= this.filterYear) && (this.filterYear <= endDate.year());
					}

					return matchDelay && matchSearch && matchStatus && matchYear;
				});
			},
			formatCurrency(amount) {
				let formatter = new Intl.NumberFormat('pt-BR', {
					style: 'currency',
					currency: 'BRL',
				});
				return formatter.format(amount);
			},
			getStatus(action) {
				if (!action.start_date_real || moment(action.start_date_real).isAfter(this.currentDate)) { // Não iniciada
					return this.availableStatuses[0];
				} else if (moment(action.start_date_real).isSameOrBefore(this.currentDate)) { // Em andamento
						return this.availableStatuses[1];
				} else if (moment(action.end_date_real).isSameOrBefore(this.currentDate)) { // Concluída
						return this.availableStatuses[2];
				}
			},
			getDelay(action) {
				return (!action.start_date_real && moment(action.start_date_forecast).isSameOrBefore(this.currentDate));
			},
			moment() {
				return moment();
			}
		}
	}
</script>
