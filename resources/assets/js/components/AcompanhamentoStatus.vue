<template>
		<div>
			<div class="columns content has-text-centered is-marginless">
				<div class="column">
					<h3 class="title">Como está</h3>
				</div>
				<div class="column">
					<h3 class="title">Como deveria estar</h3>
				</div>
			</div>
			<div class="columns">
				<div :class="{
					'column': true,
					'is-half': true,
					'is-future': selectedDate.isAfter(currentDate)
					}">

					<chart :data="dataReal" class="chart"></chart>
				</div>
				<div class="column is-half">
					<chart :data="dataShould" class="chart"></chart>
				</div>
			</div>
			<div class="field is-grouped is-grouped-centered">
				<div class="control">
					<button :class="{
								'button': true,
								'is-danger': true,
								'is-outlined': view === 'actions',
								'is-active': view === 'actions'
								}"
							@click="view = 'actions'">Ações</button>
				</div>
				<div class="control">
					<button :class="{
								'button': true,
								'is-danger': true,
								'is-outlined': view === 'investments',
								'is-active': view === 'investments'
								}"
							@click="view = 'investments'">Recursos</button>
				</div>
			</div>
		</div>
</template>

<script>
	export default {

		props: ['actions', 'selectedDate'],

		data() {
			return {
				currentDate: moment(),
				view: 'actions'
			}
		},

		computed: {
			notStartedActions() {
				return this.actions.filter(action => !action.start_date_real || moment(action.start_date_real).isAfter(this.selectedDate));
			},
			inProgressActions() {
				return this.actions.filter(action => moment(action.start_date_real).isSameOrBefore(this.selectedDate) && (!action.end_date_real || moment(action.end_date_real).isSameOrAfter(this.selectedDate)));
			},
			doneActions() {
				return this.actions.filter(action => moment(action.end_date_real).isSameOrBefore(this.selectedDate));
			},
			shouldNotStartedActions() {
				return this.actions.filter(action => (moment(action.start_date_forecast).isAfter(this.selectedDate)));
			},
			shouldInProgressActions() {
				return this.actions.filter(action => moment(action.start_date_forecast).isSameOrBefore(this.selectedDate) && moment(action.end_date_forecast).isSameOrAfter(this.selectedDate));
			},
			shouldDoneActions() {
				return this.actions.filter(action => moment(action.end_date_forecast).isSameOrBefore(this.selectedDate));
			},
			dataReal() {
				if(this.view === 'actions') {
					return [this.notStartedActions.length, this.inProgressActions.length, this.doneActions.length];
				} else {
					let notStartedInvestments = this.notStartedActions.length ?
						this.notStartedActions
						.map(action => action.amount_forecast)
						.reduce((prev, next) => prev + next)
						: 0;
					let inProgressInvestments = this.inProgressActions.length ?
						this.inProgressActions
						.map(action => action.amount_invested)
						.reduce((prev, next) => prev + next)
						: 0;
					let doneInvestments = this.doneActions.length ?
						this.doneActions
						.map(action => action.amount_invested)
						.reduce((prev, next) => prev + next)
						: 0;

					return [notStartedInvestments, inProgressInvestments, doneInvestments];
				}
			},
			dataShould() {
				if(this.view === 'actions') {
					return [this.shouldNotStartedActions.length, this.shouldInProgressActions.length, this.shouldDoneActions.length];
				} else {
					let notStartedInvestments = this.shouldNotStartedActions.length ?
						this.shouldNotStartedActions
						.map(action => action.amount_forecast)
						.reduce((prev, next) => prev + next)
						: 0;
					let inProgressInvestments = this.shouldInProgressActions.length ?
						this.shouldInProgressActions
						.map(action => action.amount_forecast)
						.reduce((prev, next) => prev + next)
						: 0;
					let doneInvestments = this.shouldDoneActions.length ?
						this.shouldDoneActions
						.map(action => action.amount_forecast)
						.reduce((prev, next) => prev + next)
						: 0;

					return [notStartedInvestments, inProgressInvestments, doneInvestments];
				}
			}
		},

		mounted() {

		},

		methods: {
		}
	}
</script>

<style scoped>

.chart {
	max-width: 400px;
	margin: auto;
}

.is-future {
	opacity: 0.5;
}

</style>
