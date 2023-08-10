/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import VueRouter from 'vue-router';

import ListarConsultores from './components/pages/ListarConsultores.vue';
import PaginaInicial from './components/pages/PaginaInicial.vue';
import Vue from 'vue';

import App from './components/App.vue'

Vue.use(VueRouter);

const routes = [
    { path: '/listarConsultores', component: ListarConsultores },
    { path: '/', component: PaginaInicial }
];

const router = new VueRouter({
    routes
});


const app = new Vue({
    el: "#app",
    router: router,
    render: h => h(App)
})
