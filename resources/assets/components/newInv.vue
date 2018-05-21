<template>
	<form style="padding: 20px; padding-bottom: 50px;" v-on:submit.prevent="submitBottle">
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Offering ID</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.offering_id" placeholder="9876">
		  </div>
		</div>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Quantity</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="quantity">
		  </div>
		</div>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Location ID</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.location_id" placeholder="Down by the Farm">
		  </div>
		</div>
	    <button class="btn btn-primary" type="submit">Create Bottle!</button>
	    <p>{{ bottle }}</p>
	</form>
</div>
</template>

<script>
export default {
  data() {
	return {
		quantity                    : '',
		bottle: {
	      offering_id   			: '',
	      location_id 				: '',
	      amount					: 1,
	    },
	}
  },
  methods: {
  	submitBottle() {
  		var result = true;
  		var i;
  		for (i = 0; i < this.quantity; i++) {
			axios.post('/api/bottles', this.bottle)
				.catch(function (error) {
					result = false;
				});
		};
		if (result) {
		  	swal(
  				'Good job!',
  				'Supplier added successfully!',
  				'success'
			).then((result) => {
				if(result.value) {
					location.reload();
				}
			});
		} else {
			swal({
  				type: 'error',
  				title: 'Oops...',
  				text: 'Something went wrong!',
  				footer: 'Did you fill out all the required fields?'
			});
		}
	},
  }
}
</script>