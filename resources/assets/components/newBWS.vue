<template>
	<form style="padding: 20px; padding-bottom: 50px;" v-on:submit.prevent="submitProduct">
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Name</label>
		  <div class="col-sm-8">
		    <input class="form-control" v-model="product.name" placeholder="Wakefield Promised Land Shiraz">
		  </div>
		  <div class="col-sm-2">
		    <button type="button" class="btn btn-primary" v-on:click="queryLCBO">Autofill</button>
		    <modal name="autofill" height="auto" :scrollable="true">
		    	<lcbo-search
		    	name=bottle.name
		    	></lcbo-search>
            </modal>
		  </div>
		</div>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Origin</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="product.origin" placeholder="South Australia, Australia">
		  </div>
		</div>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Unit Type</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="product.unit_type" placeholder="Bottle">
		  </div>
		</div>  
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Unit Volume (mL)</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="product.unit_volume" placeholder="750">
		  </div>
		</div>    
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Alcohol Content (x100)</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="product.alcohol_content" placeholder="YYYY-MM-DD">
		  </div>
		</div>    
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Sugar Content</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="product.sugar_content" placeholder="D - Dry">
		  </div>
		</div>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Producer</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="product.producer_name" placeholder="Wakefield Wines Pty Ltd.">
		  </div>
		</div>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Release Date</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="product.release_date" placeholder="1400">
		  </div>
		</div>   
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Description</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="product.description" placeholder="Tis a good one">
		  </div>
		</div>   
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Image URL</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="product.img_url" placeholder="https://image.url">
		  </div>
		</div>   
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Pairing</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="product.pairing" placeholder="Goes well with...">
		  </div>
		</div>   
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Varietal</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="product.varietal" placeholder="Shiraz">
		  </div>
		</div>   
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Style</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="product.style" placeholder="Medium-bodied & Fruity">
		  </div>
		</div>   
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">UPC</label>
		  <div class="col-sm-10">
		    <input class="form-control" v-model="product.upc" placeholder="I will automate this soon I swear">
		  </div>
		</div>
		<div class="form-group row">
          <label class="col-sm-2 col-form-label">Kosher</label>
          <div class="col-sm-10 col-form-label">
            <input type="checkbox" v-model="product.is_kosher">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Seasonal</label>
          <div class="col-sm-10 col-form-label">
            <input type="checkbox" v-model="product.is_seasonal">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Category</label>
          <div class="col-sm-10 col-form-label">
          	<input type="radio" id="one" value="beer" v-model="product.category" required>
			<label for="one">Beer</label>
			<br>
			<input type="radio" id="two" value="wine" v-model="product.category" required>
			<label for="two">Wine</label>
			<br>
          	<input type="radio" id="one" value="spirit" v-model="product.category" required>
			<label for="one">Spirit</label>
			<br>
			<input type="radio" id="two" value="nonAlcoholic" v-model="product.category" required>
			<label for="two">Non-Alcholic</label>
			<br>
			<input type="radio" id="two" value="extraneous" v-model="product.category" required>
			<label for="two">Extraneous</label>
			<br>
		  </div>
	    </div>
	    <button class="btn btn-primary" type="submit">Create Product!</button>
	    <p>{{ product }}</p>
	    <p>{{ result }}</p>
	</form>
</div>
</template>

<script>
export default {
  data() {
	return {
		product: {
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
	      upc               : ''
	    },
	    result              : ''
	}
  },
  methods: {
  	submitProduct() {
		axios.post('/api/products', this.product)
		  .then(function (response) {
		  	swal(
  				'Good job!',
  				'Product added successfully!',
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
	queryLCBO() {
        var config = {
  			headers: {
    			Accept: 'application/json',
    			Authorization: 'Token MDowZWI0NTNmNC00NGJjLTExZTgtYjY4OS04ZmZmYjQyODM5NmU6M2tKTGFEOU1YR05mbkN5QXd2Z3FQQVo3anVsaHNPamtvbXhQ'
  			}
		}

		axios.get("https://lcboapi.com/products?q=" + this.product.name.replace(/ /g, "+"), config)
		    .then(response => {
      			this.result = response.data
    		})

    	swal({
		  title: 'Search LCBO',
		  input: 'text',
		  inputAttributes: {
		    autocapitalize: 'off'
		  },
		  showCancelButton: true,
		  confirmButtonText: 'Look up',
		  showLoaderOnConfirm: true,
		  preConfirm: (query) => {
		    return axios.get('https://lcboapi.com/products?q=jack', {
		    	Accept: 'application/json',
    			Authorization: 'Token MDowZWI0NTNmNC00NGJjLTExZTgtYjY4OS04ZmZmYjQyODM5NmU6M2tKTGFEOU1YR05mbkN5QXd2Z3FQQVo3anVsaHNPamtvbXhQ'
		    })
		      .then(response => {
		        if (!response.ok) {
		          throw new Error(response.statusText)
		        }
		        return response.json()
		      })
		      .catch(error => {
		      	console.log(error);
		        swal.showValidationError(
		          error
		        )
		      })
		  },
		  allowOutsideClick: () => !swal.isLoading()
		}).then((result) => {
		  if (result.value) {
		    swal({
		      title: `${result.value.name}`,
		      imageUrl: result.value.avatar_url
		    })
		  }
		})
	}
  }
}
</script>