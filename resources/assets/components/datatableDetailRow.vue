<template>
  <div @click="onClick">
    <img class="transparent-style" :src=rowData.img_url style="float: left; width: 350px;">
    <div class="inline field">
      <label style="font-weight: bold;">Name: </label>
      <span>{{rowData.name}}</span>
    </div>
    <div class="inline field">
      <label style="font-weight: bold;">Origin: </label>
      <span>{{rowData.origin}}</span>
    </div>
    <div class="inline field">
      <label style="font-weight: bold;">Unit Type: </label>
      <span>{{rowData.unit_type}}</span>
    </div>
    <div class="inline field">
      <label style="font-weight: bold;">Unit Volume: </label>
      <span>{{rowData.unit_volume}}</span>
    </div>
    <div class="inline field">
      <label style="font-weight: bold;">Alcohol Content: </label>
      <span>{{rowData.alcohol_content}}</span>
    </div>
    <div class="inline field">
      <label style="font-weight: bold;">Sugar Content: </label>
      <span>{{rowData.sugar_content}}</span>
    </div>
    <div class="inline field">
      <label style="font-weight: bold;">Producer: </label>
      <span>{{rowData.producer}}</span>
    </div>
    <div class="inline field">
      <label style="font-weight: bold;">Release Date: </label>
      <span>{{rowData.release_date}}</span>
    </div>
    <div class="inline field">
      <label style="font-weight: bold;">Description: </label>
      <span>{{rowData.description}}</span>
    </div>
    <div class="inline field">
      <label style="font-weight: bold;">Pairing: </label>
      <span>{{rowData.pairing}}</span>
    </div>
    <div class="inline field">
      <label style="font-weight: bold;">Style: </label>
      <span>{{rowData.style}}</span>
    </div>
    <div class="inline field">
      <label style="font-weight: bold;">UPC: </label>
      <span>{{rowData.upc}}</span>
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
  methods: {
    onClick (event) {
      console.log('my-detail-row: on-click', event.target)
    }
  },
}
</script>