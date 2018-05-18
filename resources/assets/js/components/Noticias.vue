<template>
	<div class="columns">
		<div v-for="article of news" class="column">
			<div class="card">
				<div v-if="articleImage(article['content:encoded'])" class="card-image">
					<figure class="image is-marginless">
						<img :src="articleImage(article['content:encoded'])" alt="Imagem do post">
					</figure>
				</div>
				<div class="card-content">
					<div class="content">
						<h4 class="title">{{ article.title }}</h4>
						<div v-html="article.content"></div>
						<div class="has-text-right">
							<time :datetime="articleDateTime(article)" class="has-text-grey">{{ articleLocalizedDate(article) }}</time>
						</div>
					</div>
				</div>
				<footer class="card-footer">
					<a :href="article.link" target="_blank" class="card-footer-item has-text-primary has-text-weight-bold">Leia mais</a>
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
				return moment(article.isoDate).format('LT [-] LL');
			},
			articleDateTime(article) {
				return moment(article.isoDate).format('YYYY[-]M[-]D');
			},
			articleImage(content) {
				let div = document.createElement('div');
				div.innerHTML = content;
				let firstImage = div.getElementsByTagName('img')[0]
				return firstImage ? firstImage.getAttribute("src") : null;
			}
		}
    }
</script>
