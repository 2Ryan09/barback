<template>
	<form style="padding: 20px; padding-bottom: 50px;" v-on:submit.prevent="submitOffer">
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">BWS ID</label>
		  <div class="col-sm-9">
		    <input class="form-control" v-model="offering.product_id" placeholder="12345" required>
		  </div>
		  <div class="col-sm-1">
		    <button type="button" class="btn btn-primary" @click="getBWS">Lookup</button>
		    <modal name="getBWSByName" height="500" width="1000">
		    	<div style="padding: 20px;">
		    		<bws-vuetable @clicked="getID"></bws-vuetable>
		    	</div>
            </modal>
		  </div>
		</div>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Supplier ID</label>
		  <div class="col-sm-9">
		    <input class="form-control" v-model="offering.supplier_id" placeholder="12345" required>
		  </div>
		  <div class="col-sm-1">
		    <button type="button" class="btn btn-primary" @click="getSupplier">Lookup</button>
		    <modal name="getSupplierByName" height="500" width="1000">
		    	😄
            </modal>
		  </div>
		</div>
		<div class="form-group row">
		  <label class="col-sm-2 col-form-label">Cost Per Bottle</label>
		  <div class="col-sm-9">
		    <div class="input-group-prepend">
              <div class="input-group-text">$</div>
              <input class="form-control" v-model="offering.cost" placeholder="Down on the Farm">
		  	</div>
          </div>
		  <div class="col-sm-1">
		    <button type="button" class="btn btn-primary" @click="getPricePerBottle">Calculate</button>
		  </div>
		</div>
		    <modal name="BottleCostCalculator" height="auto" :scrollable="true">
		      <div style="padding: 20px;">
				<div class="form-group row">
				  <label class="col-sm-9 col-form-label">Total Cost of Package</label>
				  <div class="col-sm-3">
				    <input class="form-control" v-model="calculator.total_cost">
				  </div>
				</div>
				<div class="form-group row">
				  <label class="col-sm-9 col-form-label">Number of Bottles in Package</label>
				  <div class="col-sm-3">
				    <input class="form-control" v-model="calculator.numBottles">
				  </div>
				</div>
				<div class="form-group row">
				  <label class="col-sm-9 col-form-label"><h3>Cost Per Bottle</h3></label>
				  <div class="col-sm-3">
					<h3>${{ calculator.tmp_cost = (calculator.total_cost / calculator.numBottles).toFixed(2) }}</h3>
				  </div>
				</div>
			    <button class="btn btn-primary" @click="saveResult">Done</button>
			  </div>
		    </modal>
	    <button class="btn btn-primary" type="submit">Create Offering!</button>
	    <p>{{ offering }}</p>
	</form>
</div>
</template>

<script>
export default {
  data() {
	return {
		name                : {},
		supplier            : {},
		offering: {
		  product_id        : '',
		  supplier_id       : '',
	      cost     			: '',
	    },
	    calculator: {
	      total_cost        : '',
	      numBottles        : '',
	      tmp_cost          : '',
	    }
	}
  },
  methods: {
  	submitBottle() {
		axios.post('/api/offerings', this.offering)
		  .then(function (response) {
		  	swal(
  				'Good job!',
  				'Offering added successfully!',
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
	getBWS() {
		this.$modal.show('getBWSByName');
	},
	getSupplier() {
		this.$modal.show('getSupplierByName');
	},
	getPricePerBottle() {
		this.$modal.show('BottleCostCalculator');
	},
	saveResult() {
		this.offering.cost = this.calculator.tmp_cost;
		this.$modal.hide('BottleCostCalculator');
	},
	getID(id) {
		this.$modal.hide('getBWSByName');
		this.offering.product_id = id;
	}
  }
}
</script>