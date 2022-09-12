/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

import "@mdi/font/css/materialdesignicons.css"; // Ensure you are using css-loader
import Vue from "vue";
import Vuetify from "vuetify";
import VueRouter from "vue-router";
import "vuetify/dist/vuetify.min.css";

import "animate.css";

window.Vue = require("vue");

Vue.use(Vuetify);
Vue.use(VueRouter);

Vue.component(
    "productos-consultas-component",
    require("./components/ProductosComponent.vue").default
); //declaramos el componente

let productos_consulta = {
    //lo asignamos a una variable manipulable en router
    template: `<productos-consultas-component></productos-consultas-component>`,
};

const router = new VueRouter({
    routes: [
        {
            path: "/productos-view",
            name: "product",
            component: productos_consulta,
        },
    ],
    mode: "history",
});

const app = new Vue({
    router,
    vuetify: new Vuetify({
        iconfont: "mdi",
        theme: {
            themes: {
                light: {
                    primary: "#EB8635", // primary
                    secondary: "#363636",
                    accent: "#e3ecf5", // tablas
                    error: "#FF5252",
                    info: "#1963ad",
                    success: "#4CAF50",
                    warning: "#FFC107",
                },
            },
        },
    }),
    el: "#app",
    vuetify: new Vuetify(),
    data: () => ({
        loading_get_info: false,
        perfil_tutorial: [["Editar tu perfil", "mdi-account-multiple-outline"]],
        publicaciones_tutorial: [
            ["Publicar y agregar ubicaciones", "mdi-account-multiple-outline"],
            [
                "Editar y eliminar tus publicaciones",
                "mdi-account-multiple-outline",
            ],
        ],
        administrar_cuenta_tutorial: [
            ["Eliminar cuenta", "mdi-account-multiple-outline"],
            ["Verificar cuenta", "mdi-account-multiple-outline"],          
        ],
        politica_reportes_tutorial: [
            ["Cómo reportar contenido", "mdi-account-multiple-outline"],
            ["Normas comunitarias", "mdi-account-multiple-outline"],
            ["Política de datos de ", "mdi-account-multiple-outline"],
            ["Condiciones de uso", "mdi-account-multiple-outline"],
        ],
        cruds: [
            ["Create", "mdi-plus-outline"],
            ["Read", "mdi-file-outline"],
            ["Update", "mdi-update"],
            ["Delete", "mdi-delete"],
        ],
        drawer_help: false,
        finishLoagingPage: false,
        dialog: false,
        drawer: null,
        items: [
            {
                icon: "mdi-file-edit-outline",
                text: "Gestión Ventas",
                ruta: "/admin",
                color: "#c12120",
            },
            {
                icon: "mdi-bag-checked",
                text: "Ventas Efectivas",
                ruta: "/admin-efectivas",
                color: "#c12120",
            },
            {
                icon: "mdi-information",
                text: "Detalle Gestión",
                ruta: "/admin-gestion",
                color: "#c12120",
            },
            {
                icon: "mdi-check-bold",
                text: "Ventas Aprobadas",
                ruta: "/admin-aprobadas",
                color: "#c12120",
            },
            {
                icon: "mdi-backup-restore",
                text: "Ventas Devueltas",
                ruta: "/admin-devueltas",
                color: "#c12120",
            },
            {
                icon: "mdi-close-thick",
                text: "Ventas Rechazadas",
                ruta: "/admin-rechazadas",
                color: "#c12120",
            },
            {
                icon: "mdi-upload",
                text: "Carga de base",
                ruta: "/admin-cargue",
                color: "#c12120",
            },

            /* color: '#c12120' */
        ],
    }),

    beforeMount() {
        this.finishLoagingPage = true;
        document.getElementById("loadOverlay").style.display = "none";
    },
    methods: {
        clickToggleDrawer() {
            this.drawer_help = !this.drawer_help;
        },
    },
});
