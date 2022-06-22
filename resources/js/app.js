require('./bootstrap');

window.Vue = require('vue');

Vue.component("mainapp", require('./components/mainapp.vue').default); //we call the component
const app = new Vue({
    el: "#app"
});