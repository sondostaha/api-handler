/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';


import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import {routes} from './routes';
import storeData from './store';


const app = createApp({});

Vue.use(VueRouter);
Vue.use(Vuex);

const router = new VueRouter({
    routes,
    mode: 'history'
})

const store = new Vuex.Store(storeData)

import MainApp from './components/MainApp.vue';
app.component('main-app', MainApp);

app.mount('#app',router ,store);
