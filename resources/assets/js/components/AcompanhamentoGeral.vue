<template>
		<div class="box">
			<div class="columns">
				<div class="column is-one-third">Status total:</div>
				<div class="column">
					<button class="button is-status-button is-info">
						<span>
							<strong>{{ onTimeActions.length }}</strong><br />
							<em>no prazo</em>
						</span>
					</button>
					<button class="button is-status-button is-danger">
						<span>
							<strong>{{ lateStartActions.length }}</strong><br />
							<em>início atrasado</em>
						</span>
					</button>
					<button class="button is-status-button is-warning">
						<span>
							<strong>{{ lateEndActions.length }}</strong><br />
							<em>término atrasado</em>
						</span>
					</button>
					<button class="button is-status-button is-success">
						<span>
							<strong>{{ doneActions.length }}</strong><br />
							<em>concluídas</em>
						</span>
					</button>
					<button class="button is-status-button is-light">
						<span>
							<strong>{{ forecastActions.length }}</strong><br />
							<em>previstas</em>
						</span>
					</button>
				</div>
			</div>
			<div class="columns">
				<div class="column is-one-fifth">Ações executadas:</div>
				<div class="column"><progress class="progress is-danger" value="15" max="100">90%</progress></div>
			</div>
			<div class="columns">
				<div class="column is-one-fifth">Ações iniciadas:</div>
				<div class="column"><progress class="progress is-danger" value="12" max="100">90%</progress></div>
			</div>
			<div class="columns">
				<div class="column is-one-fifth">Recursos assegurados:</div>
				<div class="column"><progress class="progress is-danger" value="16" max="100">90%</progress></div>
			</div>
			<div class="columns">
				<div class="column is-one-fifth">Recursos executados:</div>
				<div class="column"><progress class="progress is-danger" value="17" max="100">90%</progress></div>
			</div>
		</div>
</template>

<script>
	export default {

		props: ['actions', 'selectedDate'],

		data() {
			return {
			}
		},

		computed: {
			startedActions() {
				return this.actions.filter(action => moment(action.start_date_real).isSameOrBefore(this.selectedDate));
			},
			onTimeActions () {
				return this.startedActions.filter(action => moment(action.end_date_forecast).isAfter(this.selectedDate));
			},
			lateStartActions() {
				return this.actions.filter(action =>
					moment(action.start_date_forecast).isBefore(this.selectedDate) &&
					(!action.start_date_real || moment(action.start_date_real).isAfter(this.selectedDate))
				);
			},
			lateEndActions() {
				return this.startedActions.filter(action =>
					moment(action.end_date_forecast).isBefore(this.selectedDate) &&
					(!action.end_date_real || moment(action.end_date_real).isAfter(this.selectedDate))
				);
			},
			doneActions() {
				return this.startedActions.filter(action => moment(action.end_date_real).isSameOrBefore(this.selectedDate));
			},
			forecastActions() {
				return this.actions.filter(action =>
					moment(action.start_date_forecast).isAfter(this.selectedDate) &&
					moment(action.start_date_real).isAfter(this.selectedDate)
				);
			}
		},

		mounted() {
		},

		methods: {
		}
	}
</script>
