
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
Vue.component('chart', require('./components/Chart.vue'));
Vue.component('noticias', require('./components/Noticias.vue'));
Vue.component('legislativo', require('./components/Legislativo.vue'));

const app = new Vue({
    el: '#app'
});

document.addEventListener('DOMContentLoaded', () => {

  // Get all "navbar-burger" elements
  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any navbar burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach( el => {
      el.addEventListener('click', () => {

        // Get the target from the "data-target" attribute
        const target = el.dataset.target;
        const $target = document.getElementById(target);

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
  }

});

import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init({
	delay: 200,
	once: true,
});
