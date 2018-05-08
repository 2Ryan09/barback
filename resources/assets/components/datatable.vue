<template>
	<div class="ui container">
	  <vuetable ref="vuetable"
	    api-url="https://vuetable.ratiw.net/api/users"
	    :fields="['name', 'email', 'birthdate']"
	    pagination-path=""
	    @vuetable:pagination-data="onPaginationData"
	  ></vuetable>
	  <vuetable-pagination ref="pagination"
	  	@vuetable-pagination:change-page="onChangePage"
	  ></vuetable-pagination>
	</div>
</template>

<script>
export default {
  components: {
    Vuetable
    VuetablePagination
  }
  mounted() {
    this.$events.$on('filter-set', eventData => this.onFilterSet(eventData))
    this.$events.$on('filter-reset', e => this.onFilterReset())
  },
  methods: {
  	onPaginationData (paginationData) {
      this.$refs.pagination.setPaginationData(paginationData)
    },
    onChangePage (page) {
      this.$refs.vuetable.changePage(page)
    },
    onFilterSet (filterText) {
      console.log('filter-set', filterText)
    },
    onFilterReset () {
      console.log('filter-reset')
    }
  }
}
</script>