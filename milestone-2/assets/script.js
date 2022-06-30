new Vue({
	el: '#app',
	data: {
		discs: [],
		genres: [],
		genre: 'all'
	},
	created() {
		this.getList();
		axios('http://localhost:8888/classe64-10-php-ajax-dischi/milestone-2/api/genres.php')
			.then(response => this.genres = response.data.response)
			.catch(err => console.log(err.message))
	},
	methods: {
		getList() {
			axios('http://localhost:8888/classe64-10-php-ajax-dischi/milestone-2/api/discs.php', {
				params: {
				  genre: this.genre
				}
			})
				.then(response => {
					if (response.data.success) {
						this.discs = response.data.response
					}
				})
				.catch(err => console.log(err.message))
		}
	}
});
