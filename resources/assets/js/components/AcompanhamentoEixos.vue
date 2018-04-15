<template>
	<div>
		<div class="columns is-multiline">
			<div v-for="axis of axes" class="column is-half">
				<div class="card">
					<header class="card-header">
						<p class="card-header-title">
							{{ axis.name }}
						</p>
					</header>
					<div class="card-content">
						<acompanhamento-status
							:actions="axis.actions"
							:selectedDate="selectedDate">
						</acompanhamento-status>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {

		props: ['axes', 'selectedDate'],

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
