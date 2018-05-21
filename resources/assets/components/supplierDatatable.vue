<template>
  <div>
    <datatable
      api-url="/api/suppliers"
      :fields="fields"
    ></datatable>
  </div>
</template>

<script>
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
          name: 'contact_name',
          title: 'Contact Name',
          sortField: 'contact_name',
        },
        {
          name: 'contact_title',
          title: 'Contact Title',
          sortField: 'contact_title',
        },
        {
          name: 'contact_email',
          title: 'Contact Email',
          sortField: 'contact_email',
        },
        {
          name: 'contact_number_type',
          title: 'Contact Number Type',
          sortField: 'contact_number_type',
        },
        {
          name: 'contact_number',
          title: 'Contact Number',
          sortField: 'conact_number',
        },
        {
          name: '__component:custom-actions',
          title: 'Actions',
          titleClass: 'text-center',
          dataClass: 'text-center'
        }
      ]
    }
  }  
}
</script>