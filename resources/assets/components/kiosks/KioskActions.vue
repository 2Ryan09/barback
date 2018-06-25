<template>
<div>
  <button type="button" class="btn btn-sm" data-toggle="modal" :rowData="rowData" data-target="#showBottles">
    <i class="fa fa-th-list"></i>
  </button>

  <div class="modal fade" id="showBottles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bottles of {{ rowData.name }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div v-for="(bottle, index) in rowData.location" style="min-height: 200px;">
            <div class="container-fluid" style="min-height: 100px; outline: 1px solid black; padding: 10px;">
              <div class="left-half" style="text-align: left;">
                <h1>Bottle {{ index + 1 }}</h1>
                <p>Bottle ID: {{ bottle.id }}</p>
              </div>
              <div class="right-half">
                <div class="btn-group">
                  <button class="btn btn-secondary btn-lg" v-on:click="bottle.amount -= 1">-0.1</button>
                  <button disabled class="btn btn-outline-secondary btn-lg">{{ bottle.amount / 10 }}</button>
                  <button class="btn btn-secondary btn-lg" v-on:click="bottle.amount += 1">+0.1</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</template>

<script>
export default {
  props: {
    rowData: {
      type: Object,
      required: true
    },
    rowIndex: {
      type: Number
    }
  },
  data () {
    return {
      location_id    : '',
      test           : '',
    }
  },
  mounted() {
    this.getLocationID();
  },
  methods: {
    getLocationID() {
      var url = window.location.pathname.split("/");
      this.location_id = url[url.length - 1];
    }
  }
}
</script>

<style>
  .custom-actions button.ui.button {
    padding: 8px 8px;
  }
  .custom-actions button.ui.button > i.icon {
    margin: auto !important;
  }
</style>