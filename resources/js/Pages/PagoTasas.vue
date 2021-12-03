<template>
    <layout-no-registrado>
        <titulo-tramite texto="Tasas de la Secretaría de Trabajo"/>
        <descripcion texto="A partir de ahora se podrán abonar multas y otras tasas de la Secretaría de Trabajo por medio de Red Link, Link Celular."/>

        <v-row justify="center">
            <v-col justify="center" align="center" cols="12" sm="12" md="12" lg="6">
                <img class="pa-2" :src="('./images/tasas-ya.jpg')">
            </v-col>
            <v-col cols="12" sm="12" md="12" lg="6" justify="center" align="center">
                <video :poster="('./images/tasas.jpg')" :src="('./videos/tasastrabajo.mp4')" width="640" height="480" controls></video>
            </v-col>
        </v-row>

    </layout-no-registrado>
</template>

<script>
import LayoutNoRegistrado from "../Layouts/LayoutNoRegistrado";
import TituloTramite from '../Componentes/TituloTramite'
import Descripcion from '../Componentes/Descripcion';

export default {
    components: {LayoutNoRegistrado,  TituloTramite, Descripcion},

    data: () => ({
        selectedItem: 1,
        items: [
            { text: 'Optimiza las inspecciones laborales que se realicen en el ambito de la provincia', icon: 'mdi-check-bold' },
            { text: 'Pueden utilizar todos los trabajados e incluso cualquier ciudadano que observe anomalias en los distintos lugares de trabajo', icon: 'mdi-check-bold' },
            { text: 'Practico y sencillo', icon: 'mdi-check-bold' },
        ],
    }),
}
</script>
