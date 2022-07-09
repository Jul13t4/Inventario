/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
import '@mdi/font/css/materialdesignicons.css' // Ensure you are using css-loader
import VueRouter from 'vue-router'

window.Vue = require('vue').default;
Vue.use(Vuetify)
Vue.use(VueRouter)


Vue.component('home-consultas-component', require('./components/HomeConsultasComponent.vue').default);
Vue.component('usuarios-consultas-component', require('./components/UsuariosComponent.vue').default);

let  home_consultas = {
    template: `<home-consultas-component></home-consultas-component>`
}
let  usuarios_consultas = {
    template: `<usuarios-consultas-component></usuarios-consultas-component>`
}

const router = new VueRouter({

    routes: [
        {
        path: '/',
        name: 'home',
        component: home_consultas

    },
        {
        path: '/usuarios',
        name: 'users',
        component: usuarios_consultas

    }
],
    module: 'history'
});

const app = new Vue({
    router,
    vuetify: new Vuetify({
        iconfont: 'mdi',
        theme: {
            themes: {
                light: {
                    primary: '#EB8635', // rojo
                    secondary: '#363636',
                    accent: '#e3ecf5', // tablas
                    error: '#FF5252',
                    info: '#1963ad',
                    success: '#4CAF50',
                    warning: '#FFC107',
                }
            }
        },
    }),
    el: '#app',
    vuetify: new Vuetify(),
});
