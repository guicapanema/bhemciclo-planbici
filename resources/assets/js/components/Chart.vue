<script>
	import { Doughnut } from 'vue-chartjs'
	export default {

		extends: Doughnut,

		props: ['data'],

		data () {
			return {
				dataCollection: {
					labels: ['Não iniciada', 'Em andamento', 'Concluída'],
					datasets: []
				}
			}
		},

		mounted () {
			this.parseInputData();
		},

		methods: {

			parseInputData() {
				this.dataCollection.datasets = [{
					backgroundColor: ['whitesmoke', '#df392c', '#E9B000'],
					data: this.data
				}];
				this.renderChart(this.dataCollection, {responsive: true, maintainAspectRatio: true});
			}

		},

		watch: {
			data(newData, oldData) {
				this.$data._chart.destroy()
				this.parseInputData();
			}
		}
	}
</script>
