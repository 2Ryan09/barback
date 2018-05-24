<template>
  <div>
    <datatable
      api-url="/api/products"
      :fields="fields"
      detail-row-component="inv_detail_row"
    ></datatable>
  </div>
</template>

<script>
import BWSActions from './BWSActions'
Vue.component('actions', BWSActions)
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
          name: '__component:actions',
          title: 'Actions',
          titleClass: 'text-center',
          dataClass: 'text-center'
        }
      ],
      desiredID: '',
    }
  },
  methods: {
    passOnID(id) {
      this.$emit('clicked', id);
    }
  }
}
</script>