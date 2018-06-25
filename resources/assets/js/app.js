
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import swal from 'sweetalert2'
window.swal = swal;
import vmodal from 'vue-js-modal'
Vue.use(vmodal)
import VueEvents from 'vue-events'
Vue.use(VueEvents)
import keyboard from 'vue-keyboard';
Vue.component('keyboard', keyboard);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('datatable', require('../components/Datatables/Datatable.vue'));
Vue.component('inv-vuetable', require("../components/Datatables/Inventory/invDatatable.vue"));
Vue.component('bws-vuetable', require("../components/Datatables/BWS/bwsDatatable.vue"));
Vue.component('offerings-vuetable', require("../components/Datatables/Offerings/offDatatable.vue"));
Vue.component('supplier-vuetable', require("../components/Datatables/Suppliers/supplierDatatable.vue"));
Vue.component('kiosk-vuetable', require("../components/kiosks/kioskDatatable.vue"));

Vue.component('invDetailRow', require("../components/Datatables/BWS/BWSDetails.vue"));

Vue.component('new-bws-form', require("../components/newBWS.vue"));
Vue.component('new-inv-form', require("../components/newInv.vue"));
Vue.component('new-offer-form', require("../components/newOff.vue"));
Vue.component('new-supplier-form', require("../components/newSupplier.vue"));

Vue.component('kiosk-buttons', require("../components/kiosks/buttons.vue"));
Vue.component('req-sheet', require("../components/kiosks/reqSheet.vue"));

const app = new Vue({
    el: '#app'
});