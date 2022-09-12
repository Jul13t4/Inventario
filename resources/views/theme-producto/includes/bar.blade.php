<v-app-bar outlined elevation="0" style="border-bottom: 1px solid #ccc!important;" color="white" app clipped-left>
    <v-app-bar-nav-icon @click.stop="clickToggleDrawer">
        <v-icon>@{{ drawer_help == false ? 'mdi-menu-open' : 'mdi-menu' }} </v-icon>
        </v-icon>
    </v-app-bar-nav-icon>
    <v-toolbar-title>
        <a href="/buzon-ayuda" aria-current="page"
            class="secondary--text font-weight-bold  router-link-exact-active router-link-active">
            <img class="mr-1" height="40" src="">Listado de productos</a>
    </v-toolbar-title>
</v-app-bar>