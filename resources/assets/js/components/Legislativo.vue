<template>
    <div>
		<div class="columns is-multiline is-mobile">
			<div v-for="councilor of councilors" class="column is-1-desktop is-one-fifth-tablet is-one-third-mobile">
				<figure @click="onCouncilorClick(councilor)" class="image is-4-5 has-cursor-pointer">
					<img :src="councilor.image">
					<div :class="{
							'councilor-overlay': true,
						 	'has-background-green': councilor.supports.length > 0,
							'has-background-red': councilor.supports.length === 0
							}">
					</div>
					<div class="councilor-overlay-hover">
						<div class="text">{{councilor.name}}</div>
					</div>
				</figure>
			</div>
		</div>

		<div v-if="selectedCouncilor" id="councilor-modal" class="modal">
			<div class="modal-background"></div>
			<div class="modal-content">
				<div class="box">
					<article class="media">
						<div class="media-left">
							<figure class="image is-96x96">
								<img :src="selectedCouncilor.image" alt="Image">
							</figure>
						</div>
						<div class="media-content">
							<div class="content">
								<h3>{{selectedCouncilor.name}}</h3>
								<p v-if="!selectedCouncilor.supports.length">
									Não apoiou o PlanBici!
								</p>
								<p v-if="selectedCouncilor.supports.length">
									Apoiou o PlanBici:
									<ul>
										<li v-for="support of selectedCouncilor.supports">
											<strong>{{ support.date }}</strong> - {{ support.description }}
										</li>
									</ul>
								</p>
								<div>
									<div v-if="selectedCouncilor.phone" >
										<span class="icon is-small">
											<i class="fas fa-phone"></i>
										</span>&nbsp;
										{{selectedCouncilor.phone}}
									</div>
									<div v-if="selectedCouncilor.email">
										<span class="icon is-small">
											<i class="fas fa-envelope"></i>
										</span>&nbsp;
										<a :href="'mailto:' + selectedCouncilor.email" target="_blank">
											{{selectedCouncilor.email}}
										</a>
									</div>
									<div v-if="selectedCouncilor.facebook">
										<span class="icon is-small">
											<i class="fab fa-facebook"></i>
										</span>&nbsp;
										<a :href="selectedCouncilor.facebook" target="_blank">
											{{selectedCouncilor.facebook}}
										</a>
									</div>
									<div v-if="selectedCouncilor.twitter">
										<span class="icon is-small">
											<i class="fab fa-twitter"></i>
										</span>&nbsp;
										<a :href="selectedCouncilor.twitter" target="_blank">
											{{selectedCouncilor.twitter}}
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="media-right">
							<button @click="onModalClose()" class="delete is-medium" aria-label="close"></button>
						</div>
					</article>
				</div>
			</div>
		</div>
    </div>
</template>

<script>
    export default {
		data() {
			return {
				councilors: [],
				selectedCouncilor: null
			}
		},

		computed: {
		},

		mounted() {
			axios.get('/api/vereadores?showSupports=true')
				.then(response => {
					this.councilors = response.data;
					this.selectedCouncilor = this.councilors[0];
				});
		},

		methods: {
			onCouncilorClick(councilor) {
				this.selectedCouncilor = councilor;
				document.getElementById('councilor-modal').className += ' is-active';
			},
			onModalClose() {
				let modal = document.getElementById('councilor-modal');
				modal.className = modal.className.split(' ')[0];
			}
		}
    }
</script>
