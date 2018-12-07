import Vue from 'vue';
import Vuetify from 'vuetify';
import VueRouter from 'vue-router';
import routes from './routes';
import App from "./components/App";
import Axios from 'axios';
import store from './store/index';

Vue.use(Vuetify);
Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes
});

Axios.defaults.baseURL = '/api';

Axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
Axios.defaults.headers.common['X-Company-ID'] = 1;
Axios.defaults.headers.common['X-Subsidiary-ID'] = 1;

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    Axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.prototype.$http = Axios;

const app = new Vue({
    store,
    el: '#app',
    render: h => h(App),
    router
});
