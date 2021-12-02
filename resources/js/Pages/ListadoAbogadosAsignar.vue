<template>
    <layout-registrado>

            <v-row class="pa-5" justify="center" align="center">
                    <div class="MyriadPro-Cond grey--text text--darken-4 text-4xl ">
                        Listado de Abogados
                    </div>
            </v-row>

            <v-divider inset></v-divider>
            <v-row justify="center" aling-content="center">
                <v-col cols="12" lg="8">
                    <v-data-table
                        class="font elevation-5 grey lighten-4 elevation-1 mytable my-4"
                        :headers="headers" :items="dataAbogados" sort-by="calories">
                        <template v-slot:item.actions="{ item }">
                            <v-btn elevation="0" small class="mr-2 my-2 py-5" align="center"
                                   @click="seleccionar_abogado(item)">
                                <v-icon large file color="grey darken-1" medium align="center">mdi-check</v-icon>
                            </v-btn>
                        </template>
                    </v-data-table>
                </v-col>

                <v-col cols="12" lg="4" align="center" justify="center" class="my-6">
                    <img  max-height="250" width="250" :src="('./images/abogado-search.png')">
                    <div class="MyriadPro-Cond grey--text text--darken-4 text-3xl ">
                        Solicitante: {{ solicitante.nombre + '  ' + solicitante.apellido + ',' + ' ' + solicitante.dni }}
                    </div>
                    <div class="MyriadPro-Cond grey--text text--darken-4 text-3xl ">
                        Abogado seleccionado: {{abogado}}
                    </div>
                    <v-row no-gutters class="py-6 px-2">
                        <v-col cols="12" lg="6">
                            <v-btn @click="submit()" elevation="0" block height="40" color="#558B2F" class="white--text">
                                <div class="MyriadPro-Cond text-xl">Confirmar</div>
                            </v-btn>
                        </v-col>

                        <v-col cols="12" lg="6">
                            <inertia-link href="/turnos">
                                <v-btn elevation="0" block height="40" color="light-grey lighten-5" @click="close">
                                    <div class="MyriadPro-Cond text-xl">Cancelar</div>
                                </v-btn>
                            </inertia-link>
                        </v-col>
                    </v-row>
                </v-col>
            </v-row>

        <div v-if="this.dialog">
        ola apapapapap
        </div>

    </layout-registrado>
</template>

<script>
import LayoutRegistrado from "../Layouts/LayoutRegistrado";
import { Inertia } from '@inertiajs/inertia';

export default {
    name: 'ModalTurno',
    components: {LayoutRegistrado},
    props: {
        turno: Object,
        solicitante: Object,
        dataAbogados:Object,
    },

    data: () => ({
        abogado_id: null,
        abogado: 'Aun no ha seleccionado un abogado',
        headers: [
            {text: 'Nombre', value: 'nombre'},
            {text: 'Apellido', value: 'apellido'},
            {text: 'Localidad', value: 'localidad'},
            {text: 'Correo', value: 'correo'},
            {text: 'Telefono', value: 'telefono'},
            {text: 'Asignar', value: 'actions', sortable: false},
        ],
        desserts: [],
        dialog: false,
    }),

    methods: {

        submit() {
            let form = {
                turno_id: this.turno.id,
                abogado_id: this.abogado_id,
                tipo_tramite_id: 1,
            }
            Inertia.post('/asignar', form, {
                onSuccess: page => {
                    this.dialog = true;
                },
                onError: errors => {
                    this.error= true;
                },
            })
        },

        seleccionar_abogado(item) {
            this.abogado_id = item.id
            this.abogado = item.nombre + '  '  + item.apellido
        },

        close() {
            this.$emit('cerrar')
        },
    }
}
</script>

<style>
.CondText {
    font-family: MyriadPro-Cond;
    font-size: 28px !important;
}

.LightText {
    font-family: MyriadPro-LightCond;
    font-size: 28px !important;
}
</style>

