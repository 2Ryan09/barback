
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

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('inv-vuetable', require("../components/invDatatable.vue"));
Vue.component('new-bws-form', require("../components/newBWS.vue"));
Vue.component('lcbo-search', require("../components/lcbo-search.vue"));

const app = new Vue({
    el: '#app'
});