<template>
	<form style="padding: 20px; padding-bottom: 50px;" v-on:submit.prevent="submitSupplier">
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Name</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="supplier.name" placeholder="Down by the Farm">
		  </div>
		</div>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Contact Name</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="supplier.contact_name" placeholder="John Doe">
		  </div>
		</div>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Contact Title</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="supplier.contact_title" placeholder="President">
		  </div>
		</div>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Contact Email</label>
		  <div class="col-sm-10">
		    <input class="form-control" type="email" v-model="supplier.contact_email" placeholder="Down by the Farm">
		  </div>
		</div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Contact Number Type</label>
          <div class="col-sm-10 col-form-label">
          	<input type="radio" id="one" value="landline" v-model="supplier.contact_number_type" required>
			<label for="one">Landline</label>
			<input type="radio" id="two" value="cell" v-model="supplier.contact_number_type" required>
			<label for="two">Cell</label>
		  </div>
	    </div>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Contact</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="supplier.contact_number" placeholder="1234567890">
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