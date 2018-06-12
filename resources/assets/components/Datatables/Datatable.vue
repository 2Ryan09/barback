<template>
  <div style="padding-bottom: 50px;">
    <filter-bar></filter-bar>
    <vuetable ref="vuetable"
      :api-url="apiUrl"
      data-path="data"
      :fields="fields"
      pagination-path=""
      :css="css.table"
      :sort-order="sortOrder"
      :multi-sort="true"
      :detail-row-component="detailRowComponent"
      :track-by="trackBy"
      :append-params="moreParams"
      @vuetable:cell-clicked="onCellClicked"
      @vuetable:pagination-data="onPaginationData"
    ></vuetable>
    <div class="vuetable-pagination">
      <vuetable-pagination-info ref="paginationInfo"
        info-class="pagination-info"
      ></vuetable-pagination-info>
      <vuetable-pagination ref="pagination"
        :css="css.pagination"
        @vuetable-pagination:change-page="onChangePage"
      ></vuetable-pagination>
    </div>
  </div>
</template>

<script>
import accounting from 'accounting'
import moment from 'moment'
import Vuetable from 'vuetable-2/src/components/Vuetable'
import VuetablePagination from 'vuetable-2/src/components/VuetablePagination'
import VuetablePaginationInfo from 'vuetable-2/src/components/VuetablePaginationInfo'
import FilterBar from './datatableSearch'
Vue.component('filter-bar', FilterBar)
export default {
  components: {
    Vuetable,
    VuetablePagination,
    VuetablePaginationInfo,
  },
  props: {
    apiUrl: {
      type: String,
      required: true
    },
    fields: {
      type: Array,
      required: true
    },
    trackBy: {
      type: String
    },
    detailRowComponent: {
      type: String
    }
  },
  data () {
    return {
      css: {
        table: {
          tableClass: 'table table-bordered table-striped table-hover',
          ascendingIcon: 'glyphicon glyphicon-chevron-up',
          descendingIcon: 'glyphicon glyphicon-chevron-down'
        },
        pagination: {
          wrapperClass: 'pagination',
          activeClass: 'active',
          disabledClass: 'disabled',
          pageClass: 'page',
          linkClass: 'link',
          icons: {
            first: '',
            prev: '',
            next: '',
            last: '',
          },
        },
        icons: {
          first: 'glyphicon glyphicon-step-backward',
          prev: 'glyphicon glyphicon-chevron-left',
          next: 'glyphicon glyphicon-chevron-right',
          last: 'glyphicon glyphicon-step-forward',
        },
      },
      sortOrder: [
        { field: 'email', sortField: 'email', direction: 'asc'}
      ],
      moreParams: {}
    }
  },
  methods: {
    allcap (value) {
      return value.toUpperCase()
    },
    formatNumber (value) {
      return accounting.formatNumber(value, 2)
    },
    formatDate (value, fmt = 'YYYY') {
      return (value == null)
        ? ''
        : moment(value, 'YYYY').format(fmt)
    },
    onPaginationData (paginationData) {
      this.$refs.pagination.setPaginationData(paginationData)
      this.$refs.paginationInfo.setPaginationData(paginationData)
    },
    onChangePage (page) {
      this.$refs.vuetable.changePage(page)
    },
    onCellClicked (data, field, event) {
      console.log('cellClicked: ', field.name)
      this.showDetailModal(data)
    },
    showDetailModal(data) {
      try {
        var product = Object.values(data.product)[0];
      } catch(error) {
        var product = data;
      }
      swal({
        title: product.name,
        width: 800,
        html: 
          '<b>Name:</b><br>' + product.name + '<br>' +
          '<b>Varietal:</b><br>' + product.varietal + '<br>' +
          '<b>Description:</b><br>' + product.description + '<br>' +
          '<b>Pairing:</b><br>' + product.pairing + '<br>' +
          '<b>Release Date:</b><br>' + product.release_date + '<br>' +
          '<b>Producer:</b><br>' + product.producer_name + '<br>' +
          '<b>Origin:</b><br>' + product.origin + '<br>' +
          '<b>Unit Type:</b><br>' + product.unit_type + '<br>' +
          '<b>Unit Volume:</b><br>' + product.unit_volume + '<br>' +
          '<b>Alcohol Content:</b><br>' + product.alcohol_content / 100 + '%<br>' +
          '<b>Sugar Content:</b><br>' + product.sugar_content + '<br>' +
          '<b>Style:</b><br>' + product.style + '<br>' +
          '<b>UPC:</b><br>' + product.upc + '<br>',
        imageUrl: product.img_url,
        imageHeight: 200,
        imageAlt: 'Custom image',
      })
    }
  },
  events: {
    'filter-set' (filterText) {
      this.moreParams = {
        filter: filterText
      }
      Vue.nextTick( () => this.$refs.vuetable.refresh() )
    },
    'filter-reset' () {
      this.moreParams = {}
      Vue.nextTick( () => this.$refs.vuetable.refresh() )
    }
  }
}
</script>
<style>
  .pagination {
    margin: 0;
    float: right;
  }
  .pagination a.page {
    border: 1px solid lightgray;
    border-radius: 3px;
    padding: 5px 10px;
    margin-right: 2px;
  }
  .pagination a.page.active {
    color: white;
    background-color: #337ab7;
    border: 1px solid lightgray;
    border-radius: 3px;
    padding: 5px 10px;
    margin-right: 2px;
  }
  .pagination a.btn-nav {
    border: 1px solid lightgray;
    border-radius: 3px;
    padding: 5px 7px;
    margin-right: 2px;
  }
  .pagination a.btn-nav.disabled {
    color: lightgray;
    border: 1px solid lightgray;
    border-radius: 3px;
    padding: 5px 7px;
    margin-right: 2px;
    cursor: not-allowed;
  }
  .pagination-info {
    float: left;
  }
</style>