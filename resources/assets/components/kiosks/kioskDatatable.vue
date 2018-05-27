<template>
  <div>
    <datatable
      :api-url="apiUrl"
      :fields="fields"
      :row-class="onRowClass"
      my_detail_row=""
    ></datatable>
  </div>
</template>

<script>
import KioskActions from './KioskActions'
Vue.component('kiosk-actions', KioskActions)
export default {
  data () {
    return {
      apiUrl            : '',
      test: '',
      location_id       : '',
      fields: [
        {
          name: 'offering_id',
          title: 'Offering ID',
          sortField: 'offering_id'
        },
        {
          name: 'name',
          sortField: 'name',
          titleClass: 'text-left',
          dataClass: 'text-left'
        },
        {
          name: 'quantity',
          sortField: 'quantity'
        },
        {
          name: '__component:kiosk-actions',
          title: 'Actions',
          titleClass: 'text-center',
          dataClass: 'text-center'
        }
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
    },
    onRowClass() {
      return 'padding-20';
    }
  }
}
</script>