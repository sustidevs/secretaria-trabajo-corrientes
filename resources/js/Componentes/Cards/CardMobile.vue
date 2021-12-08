<template>
    <div class="ma-3">
        <div v-if="$vuetify.breakpoint.xsOnly">
            <Titulo :texto="titulo"/>
            <v-img class="my-5" :src="img"/>
            <descripcion-big :texto="descripcion"/>
            <v-row class="pt-4" no-gutters justify="center" align="center">
                <v-btn color="light-green darken-1 py-4"  rounded  block :href="link">
                    <a class="MyriadPro-Cond white--text" > {{textoBoton}} </a><v-icon class="white--text">mdi-cursor-default-click</v-icon>
                </v-btn>
            </v-row>
        </div>

        <div v-if="$vuetify.breakpoint.smOnly">
            <v-row>
                <v-col cols="12" sm="6">
                    <v-img class="my-5" :src="img"/>
                </v-col>
                <v-col cols="12" sm="6">
                    <Titulo :texto="titulo"/>
                    <descripcion-big :texto="descripcion"/>
                        <v-btn color="light-green darken-1 py-4"  rounded  block :href="link">
                            <a class="MyriadPro-Cond white--text" > {{textoBoton}} </a><v-icon class="white--text">mdi-cursor-default-click</v-icon>
                        </v-btn>
                </v-col>
            </v-row>

        </div>


    </div>
</template>

<script>
import Titulo from "../Titulo";
import DescripcionBig from "../DescripcionBig";
export default {
    components: {Titulo, DescripcionBig},
    props: {
        titulo: String,
        descripcion: String,
        img: String,
        link: String,
        textoBoton: String,
    }
}
</script>
