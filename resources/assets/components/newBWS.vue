<template>
	<form style="padding: 20px; padding-bottom: 50px;" v-on:submit="submitBottle" novalidate>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Name</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.name" value="Mark" placeholder="Wakefield Promised Land Shiraz" required>
		  </div>
		</div>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Origin</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.origin" placeholder="South Australia, Australia">
		  </div>
		</div>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Unit Type</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.unit_type" placeholder="Bottle">
		  </div>
		</div>  
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Unit Volume (mL)</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.unit_volume" placeholder="750">
		  </div>
		</div>    
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Alcohol Content (x100)</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.alcohol_content" placeholder="YYYY-MM-DD">
		  </div>
		</div>    
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Sugar Content</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.sugar_content" placeholder="D - Dry">
		  </div>
		</div>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Producer</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.producer_name" placeholder="Wakefield Wines Pty Ltd.">
		  </div>
		</div>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Release Date</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.release_date" placeholder="1400">
		  </div>
		</div>   
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Description</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.description" placeholder="Tis a good one">
		  </div>
		</div>   
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Image URL</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.img_url" placeholder="https://image.url">
		  </div>
		</div>   
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Pairing</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.pairing" placeholder="Goes well with...">
		  </div>
		</div>   
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Varietal</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.varietal" placeholder="Shiraz">
		  </div>
		</div>   
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Style</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.style" placeholder="Medium-bodied & Fruity">
		  </div>
		</div>   
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">UPC</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.upc" placeholder="I will automate this soon I swear">
		  </div>
		</div>
		<div class="form-group row">
          <label class="col-sm-2 col-form-label">Kosher</label>
          <div class="col-sm-10 col-form-label">
            <input type="checkbox" v-model="bottle.is_kosher">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Seasonal</label>
          <div class="col-sm-10 col-form-label">
            <input type="checkbox" v-model="bottle.is_seasonal">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Category</label>
          <div class="col-sm-10 col-form-label">
          	<input type="radio" id="one" value="beer" v-model="bottle.category" required>
			<label for="one">Beer</label>
			<br>
			<input type="radio" id="two" value="wine" v-model="bottle.category" required>
			<label for="two">Wine</label>
			<br>
          	<input type="radio" id="one" value="spirit" v-model="bottle.category" required>
			<label for="one">Spirit</label>
			<br>
			<input type="radio" id="two" value="nonAlcoholic" v-model="bottle.category" required>
			<label for="two">Non-Alcholic</label>
			<br>
			<input type="radio" id="two" value="extraneous" v-model="bottle.category" required>
			<label for="two">Extraneous</label>
			<br>
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
		bottle: {
	      name     			: '',
	      origin   			: '',
	      unit_type			: '',
	      unit_volume		: '',
	      alcohol_content	: '',
	      sugar_content		: '',
	      producer_name		: '',
	      release_date		: '',
	      is_seasonal		: '',
	      is_kosher			: '',
	      description       : '',
	      pairing           : '',
	      img_url           : '',
	      varietal          : '',	
	      style             : '',
	      upc               : '',
	      category          : ''
	  }
	}
  },

  methods: {
  	submitBottle() {
  		preventDefault();
		axios.post('/api/bottle', this.bottle)
		  .then(function (response) {
		  	swal(
  				'Good job!',
  				'You clicked the button!',
  				'success'
			)
		    console.log(response);
		  })
		  .catch(function (error) {
		  	swal({
  				type: 'error',
  				title: 'Oops...',
  				text: 'Something went wrong!',
  				footer: '<a href>Why do I have this issue?</a>',
			})
		    console.log(error);
		  });
	}
  }
}
</script>