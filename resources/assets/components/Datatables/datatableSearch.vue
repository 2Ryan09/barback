<template>
    <div class="filter-bar">
      <form class="form-inline">
        <div class="form-group">
          <input type="text" v-model="filterText" class="form-control" @keyup.enter="doFilter" placeholder="Search">
          <button class="btn btn-primary" @click.prevent="doFilter">Go</button>
        </div>
      </form>
    </div>
</template>

<script>
  export default {
    data () {
      return {
        filterText: ''
      }
    },
    methods: {
      doFilter () {
        this.$events.fire('filter-set', this.filterText)
      }
    }
  }
</script>
<style>
.filter-bar {
  padding: 10px;
}
</style>