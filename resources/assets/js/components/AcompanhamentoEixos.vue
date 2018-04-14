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
						<div class="content">
							<div class="columns">
								<div class="column is-one-third">Status total:</div>
								<div class="column"><progress class="progress is-danger" value="10" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Ações executadas:</div>
								<div class="column"><progress class="progress is-danger" value="15" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Ações iniciadas:</div>
								<div class="column"><progress class="progress is-danger" value="12" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Recursos assegurados:</div>
								<div class="column"><progress class="progress is-danger" value="16" max="100">90%</progress></div>
							</div>
							<div class="columns">
								<div class="column is-one-third">Recursos executados:</div>
								<div class="column"><progress class="progress is-danger" value="17" max="100">90%</progress></div>
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
