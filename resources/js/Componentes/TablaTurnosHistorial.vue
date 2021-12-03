<template>
    <div>
        <v-data-table  :headers="headers" :items="turnos" item-key="name" sort-by="turno"
                       class="font elevation-5 grey lighten-4 mytable" :mobile-breakpoint="0">
            <template v-slot:item.estado_nombre="{ item }">
                <div :class="getColor(item.estado_nombre)" outlined class="font">
                    {{ item.estado_nombre }}
                </div>
            </template>
            <template v-slot:no-data>
                <v-alert dense outlined :value="true" color="error" class="m-3" style="font-size: 1.0em">
                    No hay turnos
                </v-alert>
            </template>
        </v-data-table>
    </div>

</template>

<script>
import AlertAsistencia from "../Componentes/AlertaAsistencia.vue"
import { Inertia } from '@inertiajs/inertia'
export default {

    components: {AlertAsistencia},

    props: {
        turnos: Array,
    },

    data () {
        return {
            show: false,
            headers: [
                { text: 'TURNO', align: 'start', value: 'orden_turno', class:'green darken-2 white--text'},
                { text: 'FECHA', align: 'start', value: 'fecha_hora', class:'green darken-2 white--text'},
                { text: 'SOLICITANTE', value: 'nombre_dni_solicitante', class:'green darken-2 white--text' },
                { text: 'ABOGADO', value: 'nombre_abogado', class:'green darken-2 white--text' },
                { text: 'ESTADO', align: 'start', value: 'estado_nombre', class:'green darken-2 white--text' },
            ],
            tipo_tramite_id: this.tipoTramite,
            solicitante: '',
            abogado: ''
        }
    },


    methods: {
        getColor (estado_nombre) {
            if (estado_nombre === 'Ausente') return 'red--text'
            else if (estado_nombre === 'Presente') return 'green--text'
            else return 'black--text'
        },
    },
}
</script>

<style>
.v-data-table > .v-data-table__wrapper > table > thead > tr > th > span {
    color: white;
    font-size: 24px !important;
}

.mytable thead {
    background-color: #558B2F !important;
    font-family: "MyriadPro-Cond",serif !important;
}

.v-data-table > .v-data-table__wrapper > table > tbody > tr > td {
    font-family: "MyriadPro-LightCond",serif !important;
    font-size: 22px !important;
}

.v-data-table > .v-data-table__wrapper > table > tbody > tr:hover{
    background-color: #E8F5E9 !important;
}
</style>
