<template>
	<div>
		<a name="acompanhe"></a>
		<div class="container">
			<div class="content">
				<h1 class="has-text-centered is-size-1">
					<span class="is-underlined-dashed-dark">
						Acompanhe o plano
					</span>
				</h1>
			</div>
		</div>
		<div class="field is-grouped is-grouped-centered has-margin-top-500">
			<div class="control">
				<button :class="{
							'button': true,
							'is-large': true,
							'is-success': true,
							'has-text-dark': true,
							'has-text-weight-semibold': true,
							'is-outlined': view === 'overview',
							'is-active': view === 'overview'
							}"
						@click="onChangeView('overview')">Geral</button>
			</div>
			<div class="control">
				<button :class="{
							'button': true,
							'is-large': true,
							'is-success': true,
							'has-text-dark': true,
							'has-text-weight-semibold': true,
							'is-outlined': view === 'axes',
							'is-active': view === 'axes'
							}"
						@click="onChangeView('axes')">Eixos</button>
			</div>
			<div class="control">
				<button :class="{
							'button': true,
							'is-large': true,
							'is-success': true,
							'has-text-dark': true,
							'has-text-weight-semibold': true,
							'is-outlined': view === 'actions',
							'is-active': view === 'actions'
							}"
						@click="onChangeView('actions')">Ações</button>
			</div>
		</div>

		<div v-if="view !== 'actions'" class="columns is-centered is-mobile">
			<div class="column is-10">
				<div class="is-size-5 has-text-weight-semibold">
					<div class="is-pulled-left">2017</div>
					<div class="is-pulled-right">2020</div>
					<div class="is-clearfix"></div>
				</div>
				<input class="slider is-fullwidth is-danger" step="3" min="0" max="39" v-model.number="selectedMonth" @change="onChangeSelectedMonth()" type="range">
			</div>
		</div>
		<div v-if="view !== 'actions'" class="content has-text-centered">
			<h3 class="is-inline-flex">
				<span @click="onGoBackward()" class="icon is-medium has-text-danger has-cursor-pointer">
					<i class="fas fa-md fa-chevron-left"></i>
				</span>
				{{ selectedDate.format('Q[º trimestre,] YYYY') }}
				<span @click="onGoForward()" class="icon is-medium has-text-danger has-cursor-pointer">
					<i class="fas fa-md fa-chevron-right"></i>
				</span>
			</h3>
		</div>

		<div v-if="view === 'overview'">
			<acompanhamento-status
				:actions="actions"
				:selectedDate="selectedDate">
			</acompanhamento-status>
		</div>

		<acompanhamento-eixos
			v-if="view === 'axes'"
			:axes="axes"
			:selectedDate="selectedDate">
		</acompanhamento-eixos>

		<acompanhamento-acoes
			v-if="view === 'actions'"
			:axes="axes">
		</acompanhamento-acoes>
	</div>
</template>

<script>
	export default {

		data() {
			return {
				actions: [],
				axes: [],
				startDate: moment('2017-07-01'),
				endDate: moment('2020-12-01'),
				selectedDate: moment(),
				selectedMonth: 0,
				view: 'overview'
			}
		},

		computed: {
			totalMonths() {
				return Math.floor(moment.duration(this.endDate.valueOf() - this.startDate.valueOf()).asMonths());
			},
			elapsedMonths() {
				return Math.floor(moment.duration(this.selectedDate.valueOf() - this.startDate.valueOf()).asMonths());
			}
		},

		mounted() {
			this.selectedMonth = this.elapsedMonths - (this.elapsedMonths % 3);
			axios.get('/api/eixos?showActions=true')
				.then(response => {
					this.axes = response.data;
				});
			axios.get('/api/acoes')
				.then(response => {
					this.actions = response.data;
				});
		},

		methods: {
			onChangeView(newView) {
				this.view = newView;
			},
			onChangeSelectedMonth() {
				this.selectedDate = moment(this.startDate).add(this.selectedMonth, 'months');
			},
			onGoForward() {
				if(this.selectedMonth <= 36) {
					this.selectedMonth += 3;
					this.onChangeSelectedMonth();
				}
			},
			onGoBackward() {
				if(this.selectedMonth >= 3) {
					this.selectedMonth -= 3;
					this.onChangeSelectedMonth();
				}
			}
		}
	}
</script>
