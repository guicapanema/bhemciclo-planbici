
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.moment = require('moment');
moment.locale('pt');
window.Parser = require('rss-parser');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('acompanhamento', require('./components/Acompanhamento.vue'));
Vue.component('acompanhamento-status', require('./components/AcompanhamentoStatus.vue'));
Vue.component('acompanhamento-eixos', require('./components/AcompanhamentoEixos.vue'));
Vue.component('acompanhamento-acoes', require('./components/AcompanhamentoAcoes.vue'));
Vue.component('noticias', require('./components/Noticias.vue'));

const app = new Vue({
    el: '#app'
});
