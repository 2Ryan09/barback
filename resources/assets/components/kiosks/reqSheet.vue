<template>
	<form style="padding: 20px; padding-bottom: 50px;" v-on:submit.prevent="submitRequest">
		<div class="form" v-for="(request, index) in requests">
			<div class="form-group row">
			  <label class="col-sm col-form-label"><h3>Name: {{ name }}</h3></label>
			  <div class="col-sm">
			    <button type="button" class="btn btn-lg btn-primary" @click="getOffering(index)">Change</button>
			  </div>
			  	<label class="col-sm col-form-label"><h3>Quantity: {{ requests[index].quantity }}</h3></label>
		      <div class="col-sm">
		    	<button type="button" class="btn btn-lg btn-primary" @click="getQuantity(index)">Change</button>
			  </div>
			</div>
		</div>
		<button class="btn btn-lg btn-secondary" type="button" @click="addInput">Add Request</button>
	    <button class="btn btn-lg btn-primary" type="submit">Submit Requesition Sheet!</button>

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

	    <modal name="offerings" height=auto>
	    	:D
	    </modal>

	    <p>{{ requests }}</p>
	</form>
</div>
</template>

<script>
export default {
  data() {
	return {
  		requests      : [],
  		name          : '',
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
  	}
  }
}
</script>