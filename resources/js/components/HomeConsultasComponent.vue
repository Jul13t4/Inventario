<template>
    <v-card class="overflow-hidden">
        <v-app-bar absolute color="#37474F" dark scroll-target="#scrolling-techniques-2">
            <template v-slot:img="{ props }">
                <v-img v-bind="props" gradient="to top right, rgba(19,84,122,.5), rgba(128,208,199,.8)"></v-img>
            </template>

            <v-app-bar-nav-icon></v-app-bar-nav-icon>

            <v-app-bar-title>Inventario almacén Unisalud</v-app-bar-title>

            <v-spacer></v-spacer>

            <v-btn icon>
                <v-icon>mdi-magnify</v-icon>
            </v-btn>

            <v-btn icon>
                <v-icon>mdi-heart</v-icon>
            </v-btn>

            <v-btn icon>
                <v-icon>mdi-dots-vertical</v-icon>
            </v-btn>
        </v-app-bar>
        <v-sheet id="scrolling-techniques-2" class="overflow-y-auto" max-height="600">
            <v-container style="height: 1000px">
                <v-data-table :headers="headers" :items="desserts" sort-by="Solicitudes" class="elevation-1"
                    style="position: sticky; top: 142px">
                    <template v-slot:top>
                        <v-toolbar flat>
                            <v-toolbar-title>ítems</v-toolbar-title>
                            <v-divider class="mx-4" inset vertical></v-divider>
                            <v-spacer></v-spacer>
                            <v-dialog v-model="dialog" max-width="500px">
                                <template v-slot:activator="{ on, attrs }">
                                    <v-btn color="primary" dark class="mb-2" v-bind="attrs" v-on="on">
                                        Nuevo
                                    </v-btn>
                                </template>
                                <v-card>
                                    <v-card-title>
                                        <span class="text-h5">{{
                                                formTitle
                                        }}</span>
                                    </v-card-title>

                                    <v-card-text>
                                        <v-container>
                                            <v-row>
                                                <!--  v-if="editedItem.id_usuario"   Listo ya guarda -->
                                                <v-col cols="12" sm="6" md="12">
                                                    <v-autocomplete v-model="editedItem.id_usuario" :items="usuarios"
                                                        dense chips small-chips label="Usuarios" item-value="id"
                                                        item-text="nombre" outlined 
                                                        :menu-props="{ bottom: true, offsetY: true }" attach>
                                                    </v-autocomplete>
                                                </v-col>
                                                <v-col cols="12" sm="6" md="4">
                                                    <v-text-field v-model="editedItem.codigo" dense outlined chips
                                                        small-chips label="Codigo" item-value="id"></v-text-field>
                                                </v-col>
                                                <v-col cols="12" sm="6" md="4">
                                                    <v-text-field v-model="editedItem.dependencia_soli"
                                                        label="Dependencia soli" dense outlined></v-text-field>
                                                </v-col>
                                                <v-col cols="12" sm="6" md="4">
                                                    <v-text-field v-model="editedItem.cantidad_soli" type="number"
                                                        label="Cantidad soli" dense outlined></v-text-field>
                                                </v-col>
                                                <v-col cols="12" sm="6" md="4">
                                                    <v-text-field v-model="editedItem.recibido_por" label="Recibido por"
                                                        dense outlined></v-text-field>
                                                </v-col>
                                                <v-col cols="12" sm="6" md="4">
                                                    <v-select v-model="editedItem.estado" label="Estado"
                                                        :items="['Activo', 'Inactivo']"
                                                        :menu-props="{ bottom: true, offsetY: true }" attach dense
                                                        outlined></v-select>
                                                </v-col>
                                            </v-row>
                                        </v-container>
                                    </v-card-text>

                                    <v-card-actions>
                                        <v-spacer></v-spacer>
                                        <v-btn color="blue darken-1" text @click="close">
                                            Cancelar
                                        </v-btn>
                                        <v-btn color="blue darken-1" text @click="save">
                                            Salvar
                                        </v-btn>
                                    </v-card-actions>
                                </v-card>
                            </v-dialog>
                            <v-dialog v-model="dialogDelete" max-width="500px">
                                <v-card>
                                    <v-card-title class="text-h5 text-truncate">¿Está seguro que desea eliminar este
                                        item?</v-card-title>
                                    <v-card-actions>
                                        <v-spacer></v-spacer>
                                        <v-btn color="blue darken-1" text @click="closeDelete">Cancelar</v-btn>
                                        <v-btn color="blue darken-1" text @click="deleteItemConfirm">OK</v-btn>
                                        <v-spacer></v-spacer>
                                    </v-card-actions>
                                </v-card>
                            </v-dialog>
                        </v-toolbar>
                    </template>
                    <template v-slot:[`item.actions`]="{ item }">
                        <v-icon small class="mr-2" @click="editItem(item)">
                            mdi-pencil
                        </v-icon>
                        <v-icon small @click="deleteItem(item)">
                            mdi-delete
                        </v-icon>
                    </template>
                    <template v-slot:no-data>
                        <v-btn color="primary" @click="initialize">
                            Reset
                        </v-btn>
                    </template>
                </v-data-table>
            </v-container>
        </v-sheet>
    </v-card>
</template>
<script>
export default {
    data: () => ({
        dialog: false,
        dialogDelete: false,
        headers: [
            {
                text: "Solicitante",
                align: "start",
                sortable: false,
                value: "recibido_por",
            },
            { text: "Elemento", value: "codigo" },
            { text: "dependencia_soli", value: "dependencia_soli" },
            { text: "cantidad_soli", value: "cantidad_soli" },
            { text: "cantidad_entre", value: "cantidad_entre" },
            { text: "estado", value: "estado" },
            { text: "Actions", value: "actions", sortable: false },
        ],
        desserts: [],
        usuarios: [],
        editedIndex: -1,
        editedItem: {
            id: null,
            codigo: null,
            dependencia_soli: null,
            cantidad_soli: null,
            cantidad_entre: null,
            recibido_por: null,
            estado: null,
        },
        defaultItem: {
            name: "",
            codigo: 0,
            dependencia_soli: 0,
            cantidad_soli: 0,
            cantidad_entre: 0,
            estado: 0,
        },
    }),

    computed: {
        formTitle() {
            return this.editedIndex === -1 ? "Agregar" : "Editar";
        },
    },

    watch: {
        dialog(val) {
            val || this.close();
        },
        dialogDelete(val) {
            val || this.closeDelete();
        },
    },

    created() {
        this.initialize();
        //this.usuarios();
    },

    methods: {
        initialize() {
            var url = "/ListadoSolicitudes";
            var urlU = "/usuarios";
            axios.all([axios.get(url), axios.post(urlU)])
                .then(axios.spread((res1, res2) => {
                    this.desserts = res1.data;
                    this.usuarios = res2.data;
                    // console.log(res1);
                    // console.log(res2);
                }))
        },

        editItem(item) {
            //console.log(item);
            this.editedIndex = this.desserts.indexOf(item);
            this.editedItem = Object.assign({}, item);
            this.dialog = true;
        },

        deleteItem(item) {
            //console.log(item);
            this.editedIndex = this.desserts.indexOf(item);
            this.editedItem = Object.assign({}, item);
            this.dialogDelete = true;
        },

        deleteItemConfirm() {
            this.desserts.splice(this.editedIndex, 1);
            this.closeDelete();
        },

        close() {
            this.dialog = false;
            this.$nextTick(() => {
                this.editedItem = Object.assign({}, this.defaultItem);
                this.editedIndex = -1;
            });
        },

        closeDelete() {
            this.dialogDelete = false;
            this.$nextTick(() => {
                this.editedItem = Object.assign({}, this.defaultItem);
                this.editedIndex = -1;
            });
        },

        save() {
            if (this.editedIndex > -1) {
                console.log("1 entra osea enviamos info ");
                Object.assign(this.desserts[this.editedIndex], this.editedItem);
                var url = "/guardarData";
                const params = this.editedItem;
                axios
                    .post(url, params)
                    .then((res) => {
                        console.log(res);
                        if (res.data == true) {
                            this.initialize();
                        }
                    })
                    .catch((err) => {
                        console.error(err);
                    });
            } else {
                console.log("2 enviamos info a insertar");
                var url = "/insertarData";
                const params = this.editedItem;
                axios
                    .post(url, params)
                    .then((res) => {
                        console.log(res);
                        if (res.data == true) {
                            this.desserts.push(this.editedItem);
                            this.initialize();
                        }
                    })
                    .catch((err) => {
                        console.error(err);
                    });
            }
            this.close();
        },
        getUsuarios() {
            var url = "/usuarios"
            axios.post(url)
                .then(res => {
                    console.log(res)
                })
                .catch(err => {
                    console.error(err);
                })
        },
    },
};
</script>
