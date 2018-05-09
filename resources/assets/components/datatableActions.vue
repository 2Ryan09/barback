  <template>
    <div class="custom-actions">
      <button class="btn btn-sm" @click="$modal.show('edit')">
        <i class="fa fa-pencil-square-o"></i>
      </button>
        <modal name="edit">
          Hello!
        </modal>
      </button>
      <button class="btn btn-sm" @click="$modal.show('delete')">
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
      fullView (data, index) {
        swal("Good job!", "You are viewing the bottle!", "success")
      },
      editBottle (data, index) {
        swal("Good job!", "You are editing the bottle!", "success")
      },
      deleteBottle (data, index) {
        swal("Good job!", "You are deleting the bottle!", "success")
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