<template>
  <div>
    <datatable
      api-url="/api/offerings"
      :fields="fields"
    ></datatable>
  </div>
</template>

<script>
export default {
  data () {
    return {
      fields: [
        {
          name: 'id',
          title: '#',
          titleClass: 'text-right',
          dataClass: 'text-right'
        },
        {
          name: 'product_id',
          title: 'BWS ID',
          sortField: 'name',
        },
        {
          name: 'cost',
          sortField: 'cost',
        },
        {
          name: 'price',
          sortField: 'price',
        },
        {
          name: 'supplier_id',
          title: 'Supplier ID',
          sortField: 'supplier_id',
        },
        {
          name: '__component:custom-actions',
          title: 'Actions',
          titleClass: 'text-center',
          dataClass: 'text-center'
        }
      ]
    }
  }  
}
</script>