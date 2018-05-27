<template>
  <div>
    <datatable
      api-url="/api/products"
      :fields="fields"
    ></datatable>
  </div>
</template>

<script>
import BWSActions from './BWSActions'
Vue.component('bws-actions', BWSActions)
export default {
  data () {
    return {
      fields: [
        {
          name: 'id',
          title: '#',
          titleClass: 'text-center',
          dataClass: 'text-center'
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
          name: '__component:bws-actions',
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