<template>
  <div>
    <datatable
      api-url="/api/bottles/loc=" + location_id
      :fields="fields"
    ></datatable>
  </div>
</template>

<script>
export default {
  data () {
    return {
      location_id       : '',
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