<template>
		<div>
			<div class="columns">
				<div class="column is-one-third">Status total:</div>
				<div class="column">
					<div class="buttons">
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
			</div>

			<div class="columns">
				<div class="column is-one-fifth">Ações iniciadas:</div>
				<div class="column">
					<div class="columns is-mobile is-vcentered">
						<div class="column">
							<progress
								:class="{
										'progress': true,
								 		'is-danger': startedPercentage < 50,
										'is-warning': 50 <= startedPercentage && startedPercentage < 90,
										'is-success': startedPercentage >= 90
										}"
								:value="startedPercentage"
								max="100">
									{{ startedPercentage }}%
							</progress>
						</div>
						<div class="column is-narrow">
							{{ startedActions.length + '/' + shouldHaveStartedActions.length }}
						</div>
					</div>
				</div>
			</div>

			<div class="columns">
				<div class="column is-one-fifth">Ações finalizadas:</div>
				<div class="column">
					<div class="columns is-mobile is-vcentered">
						<div class="column">
							<progress
								:class="{
									'progress': true,
									'is-danger': donePercentage < 50,
									'is-warning': 50 <= donePercentage && donePercentage < 90,
									'is-success': donePercentage >= 90
									}"
								:value="donePercentage"
								max="100">
									{{ donePercentage }}%
							</progress>
						</div>
						<div class="column is-narrow">
							{{ doneActions.length + '/' + shouldBeDoneActions.length }}
						</div>
					</div>
				</div>
			</div>

			<div class="columns">
				<div class="column is-one-fifth">Recursos orçados:</div>
				<div class="column">
					<div class="columns is-mobile is-vcentered">
						<div class="column">
							<progress
								:class="{
										'progress': true,
										'is-danger': budgetedPercentage < 50,
										'is-warning': 50 <= budgetedPercentage && budgetedPercentage < 90,
										'is-success': budgetedPercentage >= 90
										}"
								:value="budgetedPercentage"
								max="100">
									{{ budgetedPercentage }}%
							</progress>
						</div>
						<div class="column is-narrow">
							{{ Math.ceil(budgetedPercentage) }}%
						</div>
					</div>
				</div>
			</div>

			<div class="columns">
				<div class="column is-one-fifth">Recursos aplicados:</div>
				<div class="column">
					<div class="columns is-mobile is-vcentered">
						<div class="column">
							<progress
								:class="{
									'progress': true,
									'is-danger': investedPercentage < 50,
									'is-warning': 50 <= investedPercentage && investedPercentage < 90,
									'is-success': investedPercentage >= 90
									}"
								:value="investedPercentage"
								max="100">
									{{ investedPercentage }}%
							</progress>
						</div>
						<div class="column is-narrow">
							{{ Math.ceil(investedPercentage) }}%
						</div>
					</div>
				</div>
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
			shouldHaveStartedActions() {
				return this.actions.filter(action => moment(action.start_date_forecast).isSameOrBefore(this.selectedDate));
			},
			startedPercentage() {
				if (this.shouldHaveStartedActions.length > 0) {
					return 100 * this.startedActions.length / this.shouldHaveStartedActions.length;
				}
				return 0;
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
			shouldBeDoneActions() {
				return this.startedActions.filter(action => moment(action.end_date_forecast).isSameOrBefore(this.selectedDate));
			},
			donePercentage() {
				if (this.shouldBeDoneActions.length > 0) {
					return 100 * this.doneActions.length / this.shouldBeDoneActions.length;
				}
				return 0;
			},
			forecastActions() {
				return this.actions.filter(action =>
					moment(action.start_date_forecast).isAfter(this.selectedDate) &&
					moment(action.start_date_real).isAfter(this.selectedDate)
				);
			},
			amountBudgeted() {
				let amountBudgeted = 0;
				for (let action of this.shouldHaveStartedActions) {
					amountBudgeted += action.amount_budgeted;
				}
				return amountBudgeted;
			},
			amountShouldBeBudgeted() {
				let amountShouldBeBudgeted = 0;
				for (let action of this.shouldHaveStartedActions) {
					amountShouldBeBudgeted += action.amount_forecast;
				}
				return amountShouldBeBudgeted;
			},
			budgetedPercentage() {
				if(this.amountShouldBeBudgeted > 0) {
					return 100 * this.amountBudgeted / this.amountShouldBeBudgeted;
				}
				return 0
			},
			amountInvested() {
				let amountInvested = 0;
				for (let action of this.shouldHaveStartedActions) {
					amountInvested += action.amount_invested;
				}
				return amountInvested;
			},
			amountShouldHaveInvested() {
				let amountShouldHaveInvested = 0;
				for (let action of this.shouldBeDoneActions) {
					amountShouldHaveInvested += action.amount_forecast;
				}
				return amountShouldHaveInvested;
			},
			investedPercentage() {
				if(this.amountShouldHaveInvested > 0) {
					return 100 * this.amountInvested / this.amountShouldHaveInvested;
				}
				return 0
			}
		},

		mounted() {
		},

		methods: {
		}
	}
</script>
