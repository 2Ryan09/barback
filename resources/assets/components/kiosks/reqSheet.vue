<template>
  <div>
    <datatable
      :api-url="apiUrl"
      :fields="fields"
      :row-class="onRowClass"
      trackBy="offering_id"
      detailRowComponent=""
    ></datatable>
  </div>
</template>

<script>
import ReqSheetActions from './ReqSheetActions'
Vue.component('req-sheet-actions', ReqSheetActions)
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
          name: 'par',
          sortField: 'par'
        },
        {
          name: '__component:req-sheet-actions',
          title: 'Request',
          titleClass: 'text-center',
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