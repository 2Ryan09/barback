<template>
	<p>{{ location_id }}</p>
</template>

<script>
export default {
	data() {
		return {
			location_id     : ''
		}
	},
	mounted() {
		this.getLocationID();
	},
	methods: {
		getLocationID() {
			var url = window.location.pathname.split("/");
			this.location_id = url[url.length - 1];
		}
	}
}
</script>