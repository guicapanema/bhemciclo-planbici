<template>
	<div class="columns">
		<div v-for="(article, index) of news" class="column">
			<div class="card" :data-aos="getDataAos(index)">
				<div v-if="articleImage(article['content:encoded'])" class="card-image">
					<figure class="image is-marginless">
						<img :src="articleImage(article['content:encoded'])" alt="Imagem do post">
					</figure>
				</div>
				<div class="card-content">
					<div class="content">
						<div class="is-size-7">
							<time :datetime="articleDateTime(article)" class="has-text-grey">{{ articleLocalizedDate(article) }}</time>
						</div>
						<h4 class="title is-size-6">{{ article.title }}</h4>
						<div class="is-size-7" v-html="article.content"></div>
					</div>
				</div>
				<footer class="card-footer">
					<a :href="article.link" target="_blank" class="card-footer-item has-text-dark has-text-weight-semibold">
						<span class="icon has-text-danger">
							<i class="fas fa-lg fa-plus-circle"></i>
						</span>
						Continue lendo
					</a>
				</footer>
			</div>
		</div>
	</div>
</template>

<script>

    export default {
		data() {
			return {
				news: []
			}
		},
        mounted() {
            let parser = new Parser();
			parser.parseURL('/api/news')
				.then(entity => {
					for (let item of entity.items) {
						this.news.push(item);
					}
					this.news = this.news.splice(0, 3);
				});
        },
		methods: {
			articleLocalizedDate(article) {
				return moment(article.isoDate).format('LL');
			},
			articleDateTime(article) {
				return moment(article.isoDate).format('YYYY[-]M[-]D');
			},
			articleImage(content) {
				let div = document.createElement('div');
				div.innerHTML = content;
				let firstImage = div.getElementsByTagName('img')[0]
				return firstImage ? firstImage.getAttribute("src") : null;
			},
			getDataAos(index) {
				if (index === 0) {
					return 'fade-right';
				} else if (index === 1) {
					return 'fade-up';
				} else if (index === 2) {
					return 'fade-left';
				}
			}
		}
    }
</script>
