  <template>
    <div class="custom-actions">
      <button class="btn btn-sm" @click="$modal.show('edit')">
        <i class="fa fa-pencil-square-o"></i>
      </button>
      <modal name="edit">
        Edit Row Form :D
      </modal>
      </button>
      <button class="btn btn-sm" @click="deleteRow(rowData)">
        <i class="fa fa-trash-o"></i>
      </button>
    </div>
  </template>

  <script>
  import swal from 'sweetalert2'
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
      deleteRow (data, index) {
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
            // TODO put in delete function of bottle
            swal(
              'Deleted!',
              'Your bottle has been deleted.',
              'success'
            )
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