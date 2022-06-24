require('./bootstrap');

window.Vue = require('vue').default;

Vue.component("mainapp", require('./components/mainapp.vue').default); //we call the component

//initialize vue
const app = new Vue({
    el: "#app",
});