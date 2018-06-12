<template>
  <div class="custom-actions">
    <button class="btn btn-md" @click="rowData.numReq -= 1">
      <i class="fa fa-minus"></i>
    </button>
    &nbsp;
    {{ rowData.numReq }}
    &nbsp;
    <button class="btn btn-md" @click="rowData.numReq += 1">
      <i class="fa fa-plus"></i>
    </button>
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