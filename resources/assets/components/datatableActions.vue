  <template>
    <div class="custom-actions">
      <button class="btn btn-sm" @click="$modal.show('edit')">
        <i class="fa fa-pencil-square-o"></i>
      </button>
      <modal name="edit" height="auto" :scrollable="true" style="padding: 50px;">
        <new-bws-form></new-bws-form>
      </modal>
      </button>
      <button class="btn btn-sm" @click="deleteRow(rowData)">
        <i class="fa fa-trash-o"></i>
      </button>
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
    methods: {
      deleteRow (data) {
        swal({
          title: 'Are you sure?',
          text: "A black hole will consume this bottle!",
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
            axios.delete('/api/bottles', {
                data: { id: data.id }
            })
            swal(
              'Deleted!',
              'Your bottle has been deleted.',
              'success'
            ).then((result) => {
              if(result.value) {
                location.reload();
              }
            })
          } else if (
            result.dismiss === swal.DismissReason.cancel
          ) {
            swal(
              'Cancelled',
              'This bottle still lives.',
              'error'
            )
          }
        })
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