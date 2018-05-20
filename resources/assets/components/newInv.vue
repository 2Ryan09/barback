<template>
	<form style="padding: 20px; padding-bottom: 50px;" v-on:submit.prevent="submitBottle">

	    <button class="btn btn-primary" type="submit">Create Bottle!</button>
	    <p>{{ bottle }}</p>
	</form>
</div>
</template>

<script>
export default {
  data() {
	return {
		bottle: {
	      name     			: '',
	      origin   			: '',
	    },
	}
  },
  methods: {
  	submitBottle() {
		axios.post('/api/products', this.bottle)
		  .then(function (response) {
		  	swal(
  				'Good job!',
  				'Bottle added successfully!',
  				'success'
			).then((result) => {
				if(result.value) {
					location.reload();
				}
			})
		  })
		  .catch(function (error) {
		  	swal({
  				type: 'error',
  				title: 'Oops...',
  				text: 'Something went wrong!',
  				footer: 'Did you fill out all the required fields?'
			})
		    console.log(error);
		  });
	},
  }
}
</script>