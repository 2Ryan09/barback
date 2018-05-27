<template>
  <div class="custom-actions">
    <button disabled class="btn btn-sm" @click="editRow()">
      <i class="fa fa-pencil-square-o"></i>
    </button>
    <button class="btn btn-sm" @click="deleteRow(rowData)">
      <i class="fa fa-trash-o"></i>
    </button>

    <modal name="edit" height="auto" :scrollable="true" style="padding: 50px;">
      <new-bws-form></new-bws-form>
    </modal>
  </div>
</template>

<script>
export default {
  props: {
    rowData: {
      type: Object,
      required: true
    },
    rowIndex: {
      type: Number
    }
  },
  data () {
    return {
      test     : '',
    }
  },
  methods: {
    deleteRow (data) {
      axios.get('/api/bwsOfferings/' + data.id)
        .then((response) => {
          this.test = response.data;
          if (Object.keys(this.test).length === 0) {
            swal({
              title: 'Are you sure?',
              text: "A black hole will consume this product!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!',
              cancelButtonText: 'No, cancel!',
              confirmButtonClass: 'btn btn-success',
              cancelButtonClass: 'btn btn-danger',
              buttonsStyling: false,
              reverseButtons: true
            }).then((result) => {
              if (result.value) {
                axios.delete('/api/products/' + String(data.id))
                .then(function (response) {
                  swal(
                    'Deleted!',
                    'Product deleted successfully!',
                    'success'
                ).then((result) => {
                  if(result.value) {
                    location.reload();
                  }
                })
                })
                .catch(function (error) {
                  swal({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                })
                  console.log(error);
                });
              } else if (
                result.dismiss === swal.DismissReason.cancel
              ) {
                swal(
                  'Cancelled',
                  'This product still lives.',
                  'error'
                )
              }
            })
          } else {
            swal('hi')
              swal(
                'Uh Oh',
                'You cannot delete this product, it has an offering attached!',
                'error'
              )
          }
        })

    },
    editRow() {
      this.$modal.show('edit');
    }
  }
}
</script>

<style>
  .custom-actions button.ui.button {
    padding: 8px 8px;
  }
  .custom-actions button.ui.button > i.icon {
    margin: auto !important;
  }
</style>