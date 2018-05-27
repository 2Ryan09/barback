<template>
<div>
	<div class="btn-group" v-for="location in locations" :key="location.id" style="height: 200px;">
	  <button type="button" class="btn btn-outline-secondary" v-on:click="chooseLocation(location)" style="width: 400px; font-size: 36pt;">{{ location.name }}</button>
	</div>
</div>
</template>

<script>
export default {
	data() {
		return {
			locations           : ''
		}
	},
	mounted() {
		this.getLocations();
	},
	methods: {
		getLocations() {
			axios.get('/api/locations')
				.then((response) => {
					this.locations = response.data;
				})
				.catch((error) => {
					swal({
					  type: 'error',
					  title: 'Oops...',
					  text: 'Something went wrong!',
					})
				});
		},
		chooseLocation(location) {
			window.location.href = '/kiosk/inventory/' + location.id;
		}
	}
}
</script>