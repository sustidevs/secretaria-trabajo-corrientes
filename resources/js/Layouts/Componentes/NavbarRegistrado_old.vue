<template>
    <v-card dark flat>
        <v-toolbar class="px-24 MyriadPro-LightCond" height="80px" align="center">
            <img class="w-24" align="center" v-bind:src = "'./img/secretariaBlanco.svg'" alt="SecretariaTrabajo">
            <inertia-link :href="'/turnos'">
                <a class="mx-7 text-2xl white--text">Turnos</a>
            </inertia-link>
            <inertia-link :href="'/historial-de-turnos'">
                <a class="text-2xl white--text">Historial</a>
            </inertia-link>
            <v-spacer></v-spacer>
            <!-- Authentication -->
            <form method="POST" @submit.prevent="logout">
                <button type="submit" align="center">
                    <a class="MyriadPro-LightCond text-2xl white--text">Cerrar sesión</a>
                    <v-icon class="pl-2" align="center">mdi-logout</v-icon>
                </button>
            </form>
        </v-toolbar>
    </v-card>
</template>

<script>
export default {
    name: "NavbarRegistrado",

    methods: {
        logout() {
            this.$inertia.post(route('cerrar-sesion'));
        },
    }
}
</script>

<style>

@font-face {
    font-family: MyriadProBlackCond;
    src: url('/fonts/MyriadProBlackCond.otf');
}

@font-face {
    font-family: MyriadProCond;
    src: url('/fonts/MyriadPro-Cond.otf');
}

@font-face {
    font-family: MyriadProLightCond;
    src: url('/fonts/MyriadPro-LightCond.otf');
}

.MyriadProBlackCond {
    font-family: "MyriadProBlackCond";
}

.MyriadPro-Cond {
    font-family: "MyriadProCond";
}

.MyriadPro-LightCond {
    font-family: "MyriadProLightCond";
}

</style>
