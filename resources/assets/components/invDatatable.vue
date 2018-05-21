<template>
  <div>
    <datatable
      api-url="/api/bottles"
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
          name: 'offering_id',
          title: 'Offering',
          sortField: 'offering_id'
        },
        {
          name: 'location_id',
          title: 'Location',
          sortField: 'location_id'
        },
        {
          name: 'amount',
          sortField: 'amount'
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