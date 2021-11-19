<template>
    <layout-no-registrado>
        <div>
            <div class="MyriadPro-Cond sizText text-justify green--text text--darken-4"> TRÁMITE </div>
            <titulo-tramite :texto="this.tramite.nombre"/>
            <descripcion class="mb-7" texto="Los requisitos deberán ser presentados de manera presencial el día y la hora en que se le asignará el turno."/>
            <card-como-solicitar-turno/>
            <v-divider/>
            <v-row class="pt-10 pb-16">
                <v-col cols="12" xl="8" lg="8" md="12" sm="12" xs="12">
                    <card-documentacion-obligatoria :datos="this.dataRequisitos" />
                </v-col>
                <v-col cols="12" xl="4" lg="4" md="12" sm="12" xs="12">
                    <card-verde titulo="Atención al público" texto1="Días:" descripcion1="Lunes, martes, miércoles y jueves." texto2="Horarios:" descripcion2="08:00h, 09:00h, 10:00h, 11:00h, 12:00h."/>
                    <card-verde titulo="Delegaciones" texto1="Sede Central:" descripcion1="San Juan 1317, Corrientes Capital."/>
                </v-col>
            </v-row>
            
            <!-- CHECKBOX
            <v-row class="px-3">
                <v-col cols="12">
                    <a :href="'/verRequisitos/' + this.tramite.id" target="_blank">
                        <v-btn outlined color="success" justify="center">
                            <v-flex align="center">
                                <v-icon color="success" class="pr-2">mdi-file-download-outline</v-icon>
                                <div class="MyriadPro-LightCond green--text font-bold text-xl">
                                    DESCARGAR LA DOCUMENTACIÓN OBLIGATORIA
                                </div>
                            </v-flex>
                        </v-btn>
                    </a>
                </v-col>
                <v-col cols="12">
                    <div class="pb-5">
                        <v-form ref="form" v-model="valid" lazy-validation>
                            <v-checkbox v-model="checkbox" :rules="[v => !!v || 'Debes seleccionar para continuar.']"
                                        label="He leído y me he notificado de la documentación necesaria para dicho trámite."
                                        required color="light-green darken-1"/>
                            <v-btn :disabled="!checkbox" color="light-green darken-1" @click="validate"
                                    v-show="this.tramite.id >1">
                                <inertia-link :href="'/solicitar-turnos'" >
                                    <a class="white--text MyriadPro-Cond text-xl" >Solicitá tu turno</a>
                                </inertia-link>
                            </v-btn>
                            <v-btn :disabled="!checkbox" color="light-green darken-1" @click="validate"
                                    v-show="this.tramite.id===1">
                                <inertia-link :href="'/solicitar-turnos'" >
                                    <a class="white--text MyriadPro-Cond text-xl" >Solicitá tu turno</a>
                                </inertia-link>
                            </v-btn>
                        </v-form>
                    </div>
                </v-col>
            </v-row>  -->
            <v-divider class="my-2"/>
            <card-mas-informacion/>
        </div>
    </layout-no-registrado>
</template>

<script>
import LayoutNoRegistrado from "../Layouts/LayoutNoRegistrado";
import Titulo from '../Componentes/Titulo';
import TituloTramite from '../Componentes/TituloTramite';
import Descripcion from '../Componentes/Descripcion';
import CardComoSolicitarTurno from '../Componentes/Cards/CardComoSolicitarTurno.vue';
import CardDocumentacionObligatoria from '../Componentes/Cards/CardDocumentacionObligatoria.vue';
import CardVerde from '../Componentes/Cards/CardVerde.vue';
import CardMasInformacion from '../Componentes/Cards/CardMasInformacion.vue';


export default {
    name: "Requisitos",

    components: {LayoutNoRegistrado, Titulo, TituloTramite, Descripcion, CardComoSolicitarTurno, CardDocumentacionObligatoria, CardVerde, CardMasInformacion },

      props: {
        dataRequisitos: Object,
        tramite: Object,
    },
}
</script>

<style>
.sizText{
    font-size: 30px !important;
}
</style>