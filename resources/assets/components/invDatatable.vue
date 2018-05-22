<template>
  <div>
    <p>{{ test }}</p>
  </div>
</template>

<script>
export default {
  data () {
    return {
      test: '',
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
    axios.get('/api/bottles')
      .then((response) => {
        this.test = response.data;
      })
      .catch((error) => {
        swal(`${error}`)
      });
  }
}
</script>