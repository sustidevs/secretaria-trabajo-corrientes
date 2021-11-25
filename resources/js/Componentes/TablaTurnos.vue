<template>
                    <v-data-table  :headers="headers" :items="turnos" item-key="name" sort-by="turno"
                              class="font elevation-5 mx-3 grey lighten-4 mytable" :mobile-breakpoint="0">
                    <template v-slot:item.estado="{ item }">
                        <v-btn small class="mr-2 my-2" align="center" @click="asistio(item)">
                            <v-icon color="grey darken-1" medium align="center">mdi-check-bold</v-icon>
                        </v-btn>
                        <v-btn small class="my-2" align="center" @click="ausente(item)">
                            <v-icon color="grey" medium align="center">mdi-close</v-icon>
                        </v-btn>
                    </template>
                    <template v-slot:item.estado_nombre="{ item }">
                        <div :class="getColor(item.estado_nombre)" outlined class="font">
                            {{ item.estado_nombre }}
                        </div>
                    </template>
                    <template v-slot:no-data>
                        <v-alert dense outlined :value="true" color="error" class="m-3" style="font-size: 1.0em">
                            No hay turnos para el día de hoy
                        </v-alert>
                    </template>
                </v-data-table>
</template>

<script>
export default {

    props: {
        turnos: Array
    },

    data () {
        return {
            headers: [
                { text: 'TURNO', align: 'start', value: 'orden_turno', class:'green darken-2 white--text'},
                { text: 'HORA', align: 'start', value: 'hora', class:'green darken-2 white--text'},
                { text: 'SOLICITANTE', value: 'nombre_dni_solicitante', class:'green darken-2 white--text' },
                { text: 'ABOGADO', value: 'nombre_abogado', class:'green darken-2 white--text' },
                { text: 'ESTADO', align: 'start', value: 'estado_nombre', class:'green darken-2 white--text' },
                { text: 'ASISTENCIA', align: 'center', value: 'estado', sortable: false, class:'green darken-2 white--text' },
            ],
            tipo_tramite_id: this.tipoTramite,
        }
    },


    methods: {
        asistio (item) {
            item.estado = 1;
            this.$inertia.post('/asistencia', item)
        },
        ausente (item) {
            item.estado = 2;
            this.$inertia.post('/asistencia', item)
        },
        getColor (estado_nombre) {
            if (estado_nombre === 'Ausente') return 'ausente--text'
            else if (estado_nombre === 'Presente') return 'presente--text'
            else return 'pendiente--text'
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
