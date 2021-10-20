<template>
            <v-app-bar class="px-7" color="#393b44">
                <a href="/"><img class="pa-2" max-height="70" width="120" :src="('./images/secretariaBlanco.svg')"></a>
                <dropdown-list  titulo="Inicio"/>
                <DropdownMenu titulo="Institucional" :data-item="institucional"/>
                <dropdown-list  titulo="Tramites"/>
                <dropdown-list  titulo="Novedades"/>
                <v-row justify="end" class="px-6">
                    <a href="https://twitter.com/setracorr?s=08" target="blank" ><img width="25" class="mr-8" height="25" :src = "'/images/twitter.svg'" alt=""></a>
                    <a href="https://www.facebook.com/SecretariaDeTrabajoCorrientes/" target="blank"> <img width="11" height="11" v-bind:src = "'/images/facebook.svg'" alt=""></a>
                </v-row>
            </v-app-bar>
</template>

<script>
import DropdownMenu from "../../Componentes/DropdownMenu";
import DropdownList from "../../Componentes/DropdownList";

export default {
    name: 'Navbar',

    components: {DropdownMenu,DropdownList},

    data: () => ({
        institucional:[{titulo: 'ORGANIGRAMA', link:'/'},{titulo: 'DELEGACIONES',link:'/'}],
    }),

};

</script>
