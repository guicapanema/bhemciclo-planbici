<template>
	<div>
		<a name="acompanhe"></a>
		<div class="container">
			<div class="content">
				<h1 class="has-text-centered">Acompanhe o plano</h1>
			</div>
		</div>
		<div class="field is-grouped is-grouped-centered">
			<div class="control">
				<button :class="{
							'button': true,
							'is-primary': true,
							'is-active': view === 'overview'
							}"
						@click="onChangeView('overview')">Geral</button>
			</div>
			<div class="control">
				<button :class="{
							'button': true,
							'is-primary': true,
							'is-active': view === 'axes'
							}"
						@click="onChangeView('axes')">Eixos</button>
			</div>
			<div class="control">
				<button :class="{
							'button': true,
							'is-primary': true,
							'is-active': view === 'actions'
							}"
						@click="onChangeView('actions')">Ações</button>
			</div>
		</div>
		<div v-if="view !== 'actions'" class="columns is-vcentered is-mobile">
			<div class="column is-one-fifth has-text-right">2017</div>
			<div class="column">
				<input class="slider is-fullwidth" step="3" min="0" max="42" v-model="selectedMonth" @change="onChangeSelectedMonth()" type="range">
			</div>
			<div class="column is-one-fifth">2020</div>
		</div>
		<div v-if="view !== 'actions'" class="content has-text-centered">
			<h3>{{ selectedDate.format('Q[º trimestre,] YYYY') }}</h3>
		</div>
		<acompanhamento-geral v-if="view === 'overview'"></acompanhamento-geral>
		<acompanhamento-eixos
			v-if="view === 'axes'"
			:axes="axes"></acompanhamento-eixos>
		<acompanhamento-acoes
			v-if="view === 'actions'"
			:axes="axes"></acompanhamento-acoes>
	</div>
</template>

<script>
	export default {

		data() {
			return {
				axes: {},
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
		},

		methods: {
			onChangeView(newView) {
				this.view = newView;
			},
			onChangeSelectedMonth() {
				this.selectedDate = moment(this.startDate).add(this.selectedMonth, 'months');
			}
		}
	}
</script>
