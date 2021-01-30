
require('./bootstrap');

window.Vue = require('vue');

import VueParticlesBg from "particles-bg-vue";

Vue.use(VueParticlesBg);


Vue.component('messages', require('./components/Messages.vue').default);
Vue.component('land', require('./components/Land.vue').default);
Vue.component('friendbutton', require('./components/Button.vue').default);

const app = new Vue({
    el: '#app',
});
