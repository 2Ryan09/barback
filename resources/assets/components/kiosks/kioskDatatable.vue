<template>
  <div>
    <datatable
      :api-url="apiUrl"
      :fields="fields"
      my_detail_row=""
    ></datatable>
    <p>{{ test }}</p>
  </div>
</template>

<script>
export default {
  data () {
    return {
      apiUrl            : '',
      test: '',
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
      ]
    }
  },
  mounted() {
    this.getLocationID();
    this.generateAPIUrl();
  },
  methods: {
    getLocationID() {
      var url = window.location.pathname.split("/");
      this.location_id = url[url.length - 1];
    },
    generateAPIUrl() {
      this.apiUrl = "/api/bottles/loc=" + this.location_id;
      axios.get("/api/bottles/loc=" + this.location_id)
      .then((response) => {
        this.test = response.data;
      })
    }
  }
}
</script>