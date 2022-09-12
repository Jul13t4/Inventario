<v-navigation-drawer width="400" v-model="drawer_help" app clipped mini-variant.sync="mini">
    <v-list class="py-0">
        {{-- <v-list-item>
            <v-list-item-icon>
                <v-icon>mdi-home</v-icon>
            </v-list-item-icon>

            <v-list-item-title>Home</v-list-item-title>
        </v-list-item> --}}
        <v-list-group prepend-icon="mdi-compass-outline">
            <template v-slot:activator>
                <v-list-item-title>Funciones de </v-list-item-title>
            </template>

            <v-list-group no-action sub-group>
                <template v-slot:activator>
                    <v-list-item-content>
                        <v-list-item-title>Tu perfil</v-list-item-title>
                    </v-list-item-content>
                </template>

                <v-list-item v-for="([title, icon], i) in perfil_tutorial" :key="i" link>
                    <v-list-item-title v-text="title"></v-list-item-title>

                    <v-list-item-icon>
                        <v-icon v-text="icon"></v-icon>
                    </v-list-item-icon>
                </v-list-item>
            </v-list-group>



            <v-list-group no-action sub-group>
                <template v-slot:activator>
                    <v-list-item-content>
                        <v-list-item-title>Actions</v-list-item-title>
                    </v-list-item-content>
                </template>

                <v-list-item v-for="([title, icon], i) in cruds" :key="i" link>
                    <v-list-item-title v-text="title"></v-list-item-title>

                    <v-list-item-icon>
                        <v-icon v-text="icon"></v-icon>
                    </v-list-item-icon>
                </v-list-item>
            </v-list-group>
        </v-list-group>
        <v-list-group prepend-icon="mdi-account">
            <template v-slot:activator>
                <v-list-item-title>Administrar tu cuenta</v-list-item-title>
            </template>
            <v-list-item v-for="([title, icon], i) in administrar_cuenta_tutorial" :key="i" link>
                <v-list-item-icon>
                    {{-- <v-icon>mdi-home</v-icon> --}}
                </v-list-item-icon>
                <v-list-item-title v-text="title"></v-list-item-title>
                <v-list-item-icon>
                    <v-icon v-text="icon"></v-icon>
                </v-list-item-icon>
            </v-list-item>

        </v-list-group>
        <v-list-group prepend-icon="mdi-clipboard-alert-outline">
            <template v-slot:activator>
                <v-list-item-title>Políticas y reportes</v-list-item-title>
            </template>
            <v-list-item v-for="([title, icon], i) in politica_reportes_tutorial" :key="i" link>
                <v-list-item-icon>
                    {{-- <v-icon>mdi-home</v-icon> --}}
                </v-list-item-icon>
                <v-list-item-title v-text="title"></v-list-item-title>
                <v-list-item-icon>
                    <v-icon v-text="icon"></v-icon>
                </v-list-item-icon>
            </v-list-item>

        </v-list-group>


    </v-list>

    <template v-slot:append>
        <v-list class="py-0">
            <v-list-item to="/buzon-ayuda" link>
                <v-list-item-icon>
                    <v-icon>mdi-help-circle</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Buzón de ayuda</v-list-item-title>

            </v-list-item>
        </v-list>
    </template>

</v-navigation-drawer>