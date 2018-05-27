<template>
	<form style="padding: 20px; padding-bottom: 50px;" v-on:submit.prevent="submitRequest">
		<div class="form" v-for="(request, index) in requests">
			<div class="form-group row">
			  <label class="col-sm col-form-label"><h3>Name: </h3>{{ name[index] }}</label>
			  <div class="col-sm">
			    <button type="button" class="btn btn-lg btn-primary" @click="getBWS(index)">Change</button>
			  </div>
			  	<label class="col-sm col-form-label"><h3>Quantity: </h3>{{ requests[index].quantity }}</label>
		      <div class="col-sm">
		    	<button type="button" class="btn btn-lg btn-primary" @click="getQuantity(index)">Change</button>
			  </div>
			</div>
		</div>
		<button class="btn btn-lg btn-secondary" type="button" style="height: 150px; width: 300px; font-size: 150%; position: fixed; bottom: 20px; left: 20px;" @click="addInput">Add Request</button>
	    <button class="btn btn-lg btn-primary" type="submit" style="height: 150px; width: 300px; font-size: 150%; position: fixed; bottom: 20px; right: 20px;">Submit Requesition Sheet!</button>

	    <modal name="keyboard" height=auto>
			<div class="container-fluid" style="position: center;">
		    	<div class="row">
			        <button type="button" class="btn btn-lg btn-outline-secondary" style="font-size: 36pt; width: 200px;" @click="clickButton(1)">1</button>
			        <button type="button" class="btn btn-lg btn-outline-secondary" style="font-size: 36pt; width: 200px;" @click="clickButton(2)">2</button>
			        <button type="button" class="btn btn-lg btn-outline-secondary" style="font-size: 36pt; width: 200px;" @click="clickButton(3)">3</button>
			    </div>
			    <div class="row">
			        <button type="button" class="btn btn-lg btn-outline-secondary" style="font-size: 36pt; width: 200px;" @click="clickButton(4)">4</button>
			        <button type="button" class="btn btn-lg btn-outline-secondary" style="font-size: 36pt; width: 200px;" @click="clickButton(5)">5</button>
			        <button type="button" class="btn btn-lg btn-outline-secondary" style="font-size: 36pt; width: 200px;" @click="clickButton(6)">6</button>
			    </div>
			    <div class="row">
			        <button type="button" class="btn btn-lg btn-outline-secondary" style="font-size: 36pt; width: 200px;" @click="clickButton(7)">7</button>
			        <button type="button" class="btn btn-lg btn-outline-secondary" style="font-size: 36pt; width: 200px;" @click="clickButton(8)">8</button>
			        <button type="button" class="btn btn-lg btn-outline-secondary" style="font-size: 36pt; width: 200px;" @click="clickButton(9)">9</button>
			    </div>
			</div>
	    </modal>
	</form>
</div>
</template>

<script>
export default {
  data() {
	return {
  		requests      : [],
  		name          : [],
		next          : 1,
		relay         : '',
		relayTwo      : '',
		showKeyboard  : false,
	}
  },
  methods: {
  	addInput() {
  		this.requests.push({
  			'offering_id' : '',
  			'quantity'    : '',
  			'active'      : true,
  			'fulfilled'   : '',
  		})
  	},
  	getQuantity(index) {
  		this.relay = index;
  		this.$modal.show('keyboard')

  	},
  	clickButton(num){
  		this.requests[this.relay].quantity = num;
  		this.$modal.hide('keyboard');
  	},
  	getOffering(index) {
  		this.relayTwo = index;
  		this.$modal.show('offerings');
  	},
  	submitRequest() {
  		if (this.requests.length === 0) {
  			swal({
			  type: 'error',
			  title: 'Oops...',
			  text: 'Nothing to submit!',
			})
  		} else {
			axios.post('/api/requests', this.requests)
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
  		}
  	},
	getBWS(index) {
		swal({
		  title: 'Name of Bottle',
		  input: 'text',
		  inputAttributes: {
		    autocapitalize: 'off'
		  },
		  showCancelButton: true,
		  confirmButtonText: 'Look up',
		  showLoaderOnConfirm: true,
		  preConfirm: (name) => {
		    return fetch(`/api/products/${name}`)
		      .then(response => {
		        if (!response.ok) {
		          throw new Error(response.statusText)
		        }
		        return response.json()
		      })
		      .catch(error => {
		        swal.showValidationError(
		          `Sorry. No results.`
		        )
		      })
		  },
		  allowOutsideClick: () => !swal.isLoading()
		}).then((result) => {
		  if (result.value) {
		  	swal({
			  title: 'Is this your bottle?',
			  text: result.value.name,
			  imageUrl: result.value.img_url,
			  imageHeight: 200,
			  imageAlt: 'Custom image',
			  animation: false,
			  showCancelButton: true,
			  confirmButtonText: 'Yes!',
		      cancelButtonText: 'No (Manual Lookup)',
			  reverseButtons: true
			}).then((confirm) => {
				this.name.push([index => result.value.name]);
				this.requests[index].offering_id = result.value.offering.id;
		    })
		  }
		});
	},
  }
}
</script>