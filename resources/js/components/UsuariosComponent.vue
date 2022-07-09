<template>
    <v-card>
        <v-card-title class="indigo white--text text-h5">
            Directorio
            <v-text-field
                v-model="search"
                label="Buscar usuario"
                dark
                flat
                solo-inverted
                hide-details
                clearable
                clear-icon="mdi-close-circle-outline"
            ></v-text-field>
            <v-checkbox
                v-model="caseSensitive"
                dark
                hide-details
                label="Case sensitive search"
            ></v-checkbox>
        </v-card-title>
        <v-row class="pa-4" justify="space-between">
            <v-col cols="5">
                <v-treeview
                    :search="search"
                    :filter="filter"
                    :active.sync="active"
                    :items="items"
                    :load-children="fetchUsers"
                    :open.sync="open"
                    activatable
                    color="warning"
                    open-on-click
                    transition
                >
                    <template v-slot:prepend="{ item }">
                        <v-icon v-if="!item.children"> mdi-account </v-icon>
                    </template>
                </v-treeview>
            </v-col>

            <v-divider vertical></v-divider>

            <v-col class="d-flex text-center">
                <v-scroll-y-transition mode="out-in">
                    <div
                        v-if="!selected"
                        class="text-h6 grey--text text--lighten-1 font-weight-light"
                        style="align-self: center"
                    >
                        Seleccionar usuario
                    </div>
                    <v-card
                        v-else
                        :key="selected.id"
                        class="pt-6 mx-auto"
                        flat
                        max-width="400"
                    >
                        <v-card-text>
                            <v-avatar v-if="avatar" size="88">
                                <v-img
                                    :src="`https://avataaars.io/${avatar}`"
                                    class="mb-6"
                                ></v-img>
                            </v-avatar>
                            <h3 class="text-h5 mb-2">
                                {{ selected.nombre }}
                            </h3>
                            <div class="blue--text mb-2">
                                {{ selected.correo }}
                            </div>
                            <div class="blue--text subheading font-weight-bold">
                                {{ selected.area }}
                            </div>
                        </v-card-text>
                        <v-divider></v-divider>
                        <v-row class="text-left" tag="v-card-text">
                            <v-col
                                class="text-right mr-4 mb-2"
                                tag="strong"
                                cols="5"
                            >
                                Área:
                            </v-col>
                            <v-col
                                >{{ selected.area }}
                            </v-col>
                            <v-col
                                class="text-right mr-4 mb-2"
                                tag="strong"
                                cols="5"
                            >
                                Contrato:
                            </v-col>
                            <v-col>
                                {{ selected.cargo }}
                            </v-col>
                            <v-col
                                class="text-right mr-4 mb-2"
                                tag="strong"
                                cols="5"
                            >
                                Cédula:
                            </v-col>
                            <v-col>
                                {{ selected.cedula }}
                            </v-col>
                            <v-col
                                class="text-right mr-4 mb-2"
                                tag="strong"
                                cols="5"
                            >
                            </v-col>
                        </v-row>
                    </v-card>
                </v-scroll-y-transition>
            </v-col>
        </v-row>
    </v-card>
</template>
<script>
const avatars = [
    "?accessoriesType=Blank&avatarStyle=Circle&clotheColor=PastelGreen&clotheType=ShirtScoopNeck&eyeType=Wink&eyebrowType=UnibrowNatural&facialHairColor=Black&facialHairType=MoustacheMagnum&hairColor=Platinum&mouthType=Concerned&skinColor=Tanned&topType=Turban",
    "?accessoriesType=Sunglasses&avatarStyle=Circle&clotheColor=Gray02&clotheType=ShirtScoopNeck&eyeType=EyeRoll&eyebrowType=RaisedExcited&facialHairColor=Red&facialHairType=BeardMagestic&hairColor=Red&hatColor=White&mouthType=Twinkle&skinColor=DarkBrown&topType=LongHairBun",
    "?accessoriesType=Prescription02&avatarStyle=Circle&clotheColor=Black&clotheType=ShirtVNeck&eyeType=Surprised&eyebrowType=Angry&facialHairColor=Blonde&facialHairType=Blank&hairColor=Blonde&hatColor=PastelOrange&mouthType=Smile&skinColor=Black&topType=LongHairNotTooLong",
    "?accessoriesType=Round&avatarStyle=Circle&clotheColor=PastelOrange&clotheType=Overall&eyeType=Close&eyebrowType=AngryNatural&facialHairColor=Blonde&facialHairType=Blank&graphicType=Pizza&hairColor=Black&hatColor=PastelBlue&mouthType=Serious&skinColor=Light&topType=LongHairBigHair",
    "?accessoriesType=Kurt&avatarStyle=Circle&clotheColor=Gray01&clotheType=BlazerShirt&eyeType=Surprised&eyebrowType=Default&facialHairColor=Red&facialHairType=Blank&graphicType=Selena&hairColor=Red&hatColor=Blue02&mouthType=Twinkle&skinColor=Pale&topType=LongHairCurly",
];

const pause = (ms) => new Promise((resolve) => setTimeout(resolve, ms));

export default {
    data: () => ({
        search: null,
        caseSensitive: false,
        active: [],
        avatar: null,
        open: [],
        users: [],
    }),

    computed: {
        filter() {
            return this.caseSensitive
                ? (users, search, textKey) =>
                      users[textKey].indexOf(search) > -1
                : undefined;
        },
        items() {
            return [
                {
                    name: "Usuarios",
                    children: this.users, //? ya lo deje jajajaja   mira si puedes acmomodar la data  eso es facil jejeje te dejo chaooo gracias aooo :*
                },
            ];
        },
        selected() {
            if (!this.active.length) return undefined;

            const id = this.active[0];

            return this.users.find((user) => user.id === id);
        },
    },

    watch: {
        selected: "randomAvatar",
    },

    methods: {
        async fetchUsers(item) {
            // Remove in 6 months and say
            // you've made optimizations! :)
            await pause(1500);

            return fetch("/ListadoUsuarios")
                .then((res) => res.json())
                .then((json) => item.children.push(...json))
                .catch((err) => console.warn(err));
        },
        getUsuarios() {
            var url = "/ListadoUsuarios";
            axios
                .get(url)
                .then((res) => {
                    // this.users = res.data;
                    this.item.children.push(...res.data);
                    console.log(res);
                })
                .catch((err) => {
                    console.error(err);
                });
        },
        randomAvatar() {
            this.avatar = avatars[Math.floor(Math.random() * avatars.length)];
        },
    },
};
</script>
