require('./bootstrap'); window.Vue = require('vue');

//vue router
import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import {routes} from './routes.js'

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const router = new VueRouter({
	routes, // short for `routes: routes`
	mode: 'hash'
})

const app = new Vue({
    el: '#app',
    router
});
