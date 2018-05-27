<template>
  <div>
    <datatable
      api-url="/api/bottles"
      :fields="fields"
    ></datatable>
  </div>
</template>

<script>
import InventoryActions from './InventoryActions'
Vue.component('inv-actions', InventoryActions)
export default {
  data () {
    return {
      fields: [
        {
          name: 'offering_id',
          title: 'Offering',
          sortField: 'offering_id'
        },
        {
          name: 'name',
          sortField: 'name'
        },
        {
          name: 'quantity',
          sortField: 'quantity'
        },
        {
          name: '__component:inv-actions',
          title: 'Actions',
          titleClass: 'text-center',
          dataClass: 'text-center'
        }
      ]
    }
  },
}
</script>