<template>
	<form style="padding-bottom: 50px;">
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Name</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="name" placeholder="Wakefield Promised Land Shiraz">
		  </div>
		</div>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Origin</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="origin" placeholder="South Australia, Australia">
		  </div>
		</div>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Unit Type</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="unit_type" placeholder="Bottle">
		  </div>
		</div>  
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Unit Volume</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="unit_volume" placeholder="750">
		  </div>
		</div>    
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Alcohol Content (x100)</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="alcohol_content" placeholder="1400">
		  </div>
		</div>    
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Sugar Content</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="sugar_content" placeholder="D - Dry">
		  </div>
		</div>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Producer</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="producer_name" placeholder="Wakefield Wines Pty Ltd.">
		  </div>
		</div>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Release Date</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="release_date" placeholder="1400">
		  </div>
		</div>   
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Description</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="description" placeholder="Tis a good one">
		  </div>
		</div>   
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Image URL</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="img_url" placeholder="https://image.url">
		  </div>
		</div>   
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Pairing</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="pairing" placeholder="Goes well with...">
		  </div>
		</div>   
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Varietal</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="varietal" placeholder="Shiraz">
		  </div>
		</div>   
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Style</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="style" placeholder="Medium-bodied & Fruity">
		  </div>
		</div>   
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">UPC</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="upc" placeholder="I will automate this soon I swear">
		  </div>
		</div>
		<div class="form-group row">
          <label class="col-sm-2 col-form-label">Kosher</label>
          <div class="col-sm-10 col-form-label">
            <input type="checkbox" v-model="is_kosher">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Seasonal</label>
          <div class="col-sm-10 col-form-label">
            <input type="checkbox" v-model="is_seasonal">
          </div>
        </div>
	    <p>data: {{ $data }}</p>
	    <button class="btn btn-primary" type="submit">Submit form</button>
	</form>
</div>
</template>

<script>
export default {
  data() {
	return {
      name     : '',
      origin   : '',
      unit_type: '',
      unit_volume: '',
      alcohol_content: '',
      sugar_content: '',
      producer_name: '',
      release_date: '',
      is_seasonal: '',
      is_kosher: '',
      description: '',
      pairing: '',
      img_url: '',
      varietal: '',
      style: '',
      upc: ''
	}
  }
}
</script>