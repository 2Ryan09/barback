<template>
	<form style="padding: 20px; padding-bottom: 50px;" v-on:submit.prevent="submitSupplier">
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Name</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="supplier.name" placeholder="South Australia, Australia">
		  </div>
		</div>
	    <button class="btn btn-primary" type="submit">Create Supplier!</button>
	    <p>{{ supplier }}</p>
	</form>
</div>
</template>

<script>
export default {
  data() {
	return {
		supplier: {
	      name     			   : '',
	      contact_name         : '',
	      contact_title        : '',
	      contact_email        : '',
	      contact_number_type  : '',
	      contact_number       : ''
	    }
	}
  },
  methods: {
  	submitSupplier() {
		axios.post('/api/suppliers', this.supplier)
		  .then(function (response) {
		  	swal(
  				'Good job!',
  				'Supplier added successfully!',
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
	}
  }
}
</script>