<template>
    <layout-no-registrado>
        <v-row justify="center">
            <v-col cols="12" sm="12" md="12" lg="6">
                <titulo-tramite texto="Solicita una Inspección Laboral"/>
                <descripcion texto="Podes solicitar una inspección laboral mediante nuesta app."/>

                <v-card color="blue-grey lighten-5 my-8" tile >
                            <div v-for="(item, i) in items" :key="i" class="d-flex col">
                                    <v-icon v-text="item.icon"></v-icon>
                                    <div class="MyriadPro-Cond text-justify text-2xl" v-text="item.text"></div>
                            </div>
                </v-card>

                <v-hover v-slot="{ hover }" >
                    <a>
                        <div :class="hover ? 'green--text' : 'black--text'" class="MyriadPro-Cond text-justify text-4xl pt-3" >  <v-icon>mdi-download</v-icon> Disponible en Playstore. Descargala</div>
                    </a>
                </v-hover>


            </v-col>
            <v-col cols="12" sm="12" md="12" lg="6" justify="center" align="center">
                <video :poster="('./images/portadaapp.jpg')" :src="('./videos/inspeccion_tutorial.mp4')" width="640" height="480" controls></video>
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
