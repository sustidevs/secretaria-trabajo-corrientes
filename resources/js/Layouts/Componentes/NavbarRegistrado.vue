<template>
    <v-app>
        <v-card dark flat>
            <v-toolbar class="px-24 MyriadPro-LightCond" height="60px" align="center">
                <a href="/"><img  max-height="130" width="230" :src="('./images/logo-horizontal-secret.svg')"></a>
                <v-spacer></v-spacer>
                <!-- Authentication -->

                <div class="text-center">
                    <v-menu
                        v-model="menu"
                        :close-on-content-click="false"
                        offset-y
                        transition="slide-y-transition"
                    >
                        <template v-slot:activator="{ on, attrs }">
                            <v-btn width="300" height="60" class="MyriadPro-LightCond" color="transparent" elevation="0" file v-bind="attrs" v-on="on">
                                <v-icon width="300" height="60" class="mr-5">mdi-account-circle</v-icon> Maria Perez
                            </v-btn>
                        </template>

                        <v-card width="300">
                            <v-list>
                                <v-list-item>
                                    <v-list-item-content>
                                        <v-list-item-title>maria@corre.com</v-list-item-title>
                                        <v-list-item-subtitle>Capital</v-list-item-subtitle>
                                    </v-list-item-content>
                                </v-list-item>
                            </v-list>

                            <v-divider></v-divider>

                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn block text @click="menu = false">
                                    Salir <v-icon>mdi-export</v-icon>
                                </v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-menu>
                </div>
                <!--
                <form method="POST" @submit.prevent="logout">
                    <button type="submit" align="center">
                        <a class="MyriadPro-LightCond text-2xl white--text">Cerrar sesión</a>
                        <v-icon class="pl-2" align="center">mdi-logout</v-icon>
                    </button>
                </form>-->
            </v-toolbar>
        </v-card>
    </v-app>
</template>

<script>
export default {
    name: "NavbarRegistrado",

    data: () => ({
        fav: true,
        menu: false,
        message: false,
        hints: true,
    }),

    methods: {
        logout() {
            this.$inertia.post(route('cerrar-sesion'));
        },
    }
}
</script>
