<template>
  <div>
    <datatable
      api-url="/api/products"
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
          name: 'name',
          sortField: 'name',
        },
        {
          title: 'Year',
          name: 'release_date',
          sortField: 'release_date',
          titleClass: 'text-center',
          dataClass: 'text-center',
          callback: 'formatDate|YYYY'
        },
        {
          name: 'origin',
          sortField: 'origin'
        },
        {
          name: 'varietal',
          sortField: 'varietal'
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