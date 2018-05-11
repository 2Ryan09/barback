<template>
	<form style="padding: 20px;" v-on:submit="submitBottle">
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Name</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.name" :placeholder="rowData.name">
		  </div>
		</div>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Origin</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.origin" :placeholder="rowData.origin">
		  </div>
		</div>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Unit Type</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.unit_type" :placeholder="rowData.unit_type">
		  </div>
		</div>  
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Unit Volume (mL)</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.unit_volume" :placeholder="rowData.unit_volume">
		  </div>
		</div>    
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Alcohol Content (x100)</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.alcohol_content" :placeholder="rowData.alcohol_content">
		  </div>
		</div>    
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Sugar Content</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.sugar_content" :placeholder="rowData.sugar_content">
		  </div>
		</div>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Producer</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.producer_name" :placeholder="rowData.producer_name">
		  </div>
		</div>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Release Date</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.release_date" :placeholder="rowData.release_date">
		  </div>
		</div>   
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Description</label>
		  <div class="col-sm-10">
		    <input class="form-control" type="textarea" v-model="bottle.description" :placeholder="rowData.description">
		  </div>
		</div>   
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Image URL</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.img_url" :placeholder="rowData.img_url">
		  </div>
		</div>   
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Pairing</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.pairing" :placeholder="rowData.pairing">
		  </div>
		</div>   
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Varietal</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.varietal" :placeholder="rowData.varietal">
		  </div>
		</div>   
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Style</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.style" :placeholder="rowData.style">
		  </div>
		</div>   
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">UPC</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="bottle.upc" :placeholder="rowData.upc">
		  </div>
		</div>
		<div class="form-group row">
          <label class="col-sm-2 col-form-label">Kosher</label>
          <div class="col-sm-10 col-form-label">
            <input type="checkbox" v-model="bottle.is_kosher" :placeholder="rowData.is_kosher">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Seasonal</label>
          <div class="col-sm-10 col-form-label">
            <input type="checkbox" v-model="bottle.is_seasonal" :placeholder="rowData.is_seasonal">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Category</label>
          <div class="col-sm-10 col-form-label">
          	<input type="radio" id="one" value="beer" v-model="bottle.category" :placeholder="rowData.category" required>
			<label for="one">Beer</label>
			<br>
			<input type="radio" id="two" value="wine" v-model="bottle.category" :placeholder="rowData.category" required>
			<label for="two">Wine</label>
			<br>
          	<input type="radio" id="one" value="spirit" v-model="bottle.category" :placeholder="rowData.category" required>
			<label for="one">Spirit</label>
			<br>
			<input type="radio" id="two" value="nonAlcoholic" v-model="bottle.category" :placeholder="rowData.category" required>
			<label for="two">Non-Alcholic</label>
			<br>
			<input type="radio" id="two" value="extraneous" v-model="bottle.category" :placeholder="rowData.category" required>
			<label for="two">Extraneous</label>
			<br>
		  </div>
	    </div>
	    <button class="btn btn-primary" type="submit">Edit Bottle!</button>
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
  props: {
    rowData: {
      type: Object,
      required: true
    }
  },
  methods: {
  	submitBottle() {
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