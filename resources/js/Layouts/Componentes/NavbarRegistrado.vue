<template>
    <v-app-bar class="px-7" color="#393b44">
        <a href="/"><img  max-height="110" width="210" :src="('./images/logo-horizontal-secret.svg')"></a>
        <v-spacer></v-spacer>
        <div class="text-center">
            <v-menu
                v-model="menu"
                :close-on-content-click="false"
                offset-y
                transition="slide-y-transition"
            >
                <template v-slot:activator="{ on, attrs }">
                    <v-btn  width="200" height="60" class="MyriadPro-Cond white--text" color="transparent" elevation="0" file v-bind="attrs" v-on="on">
                        <v-icon width="200" height="60" class="mr-5">mdi-account-circle</v-icon> 
                    </v-btn>
                </template>

                <v-card width="200">
                    <v-list class="MyriadPro-Cond">
                        <v-list-item>
                            <v-list-item-content>
                                <v-list-item-title>{{this.$page.props.user.email}}</v-list-item-title>
                                <v-list-item-subtitle>Capital</v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>

                    <v-divider></v-divider>

                    <v-card-actions>
                        <v-spacer></v-spacer>
                         <form method="POST" @submit.prevent="logout">
                             <v-btn class="MyriadProBlackCond" block text @click="menu = false">
                            Salir <v-icon class="pl-5">mdi-export</v-icon>
                            </v-btn>
                         </form>
                        
                    </v-card-actions>
                </v-card>
            </v-menu>
        </div>
    </v-app-bar>
</template>

<script>
export default {
    name: "NavbarRegistrado",

    props: {
      user: Object,
    },

    data: () => ({
        fav: true,
        menu: false,
        message: false,
        hints: true,
    }),

    methods: {
        logout() {
            this.$inertia.post('/cerrar-sesion');
        },
    }
}
</script>
