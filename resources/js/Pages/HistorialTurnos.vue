<template>
    <layout-registrado>
        <v-row no-gutters class="my-6">
            <v-col cols="12" lg="6" justify="start">
                <div class="MyriadPro-Cond grey--text text--darken-4 text-5xl">
                   Historial Turnos
                </div>
            </v-col>
        </v-row>

        <v-divider class="my-2"></v-divider>

        <v-row>
            <v-col cols="12" lg="3">
                <div class="MyriadPro-Cond text-2xl grey--text text--darken-3 mt-2 mb-2">
                    Desde:
                </div>
                <input style="border: 2px solid #7CB342; border-radius: 8px; width: 350px;padding: 15px" type="date" v-model="fecha"  min="2021-11-06"  required>
            </v-col>

            <v-col cols="12" lg="3">
                <div class="MyriadPro-Cond text-2xl grey--text text--darken-3 mt-2 mb-2">
                    Hasta:
                </div>
                <input style="border: 2px solid #7CB342; border-radius: 8px; width: 350px;padding: 15px"  type="date"  v-model="fecha2"   min="2021-11-06" >
            </v-col>

            <v-col cols="12" lg="6">
                <div class="MyriadPro-Cond text-2xl grey--text text--darken-3 mt-2 mb-2">
                    Motivo de Tramite
                </div>
                <autocomplete-field  v-model="tramite_id"  nombre="name" :data="this.dataTramites" icon="mdi-file-document-multiple"/>
            </v-col>
        </v-row>

        <v-row justify="center">
            <v-btn @click="buscar()" :loading="loading" :disabled="loading"  color="#558B2F" x-large width="auto" class="px-12 white--text">
                    <div class="MyriadPro-Cond  text-2xl">
                        Buscar
                    </div>
                </v-btn>
        </v-row>


        <v-divider class="my-5"></v-divider>
        <tabla-turnos-historial :turnos="this.dataTurnos"/>
    </layout-registrado>
</template>

<script>
import NavbarRegistrado from "../Layouts/Componentes/NavbarRegistrado";
import LayoutRegistrado from "../Layouts/LayoutRegistrado";
import TablaTurnosHistorial from "../Componentes/TablaTurnosHistorial";
import LabelInput from "../Componentes/LabelInput";
import TextField from "../Componentes/TextField";
import AutocompleteField from "../Componentes/AutocompleteField";
import {Inertia} from "@inertiajs/inertia";
export default {

    components: {NavbarRegistrado,LayoutRegistrado,TablaTurnosHistorial,LabelInput,TextField,AutocompleteField},

    props: {
        dataTurnos: Array,
        dataFecha: String,
        dataTramites: Array,
        tipoTramite: Number || String,
        dataAbogados: Array,
    },

    data () {
        return {
            fecha: this.dataFecha,
            fecha2: this.dataFecha,
            toggle_exclusive: 0,
            headers: [
                { text: 'TURNO', align: 'start', value: 'orden_turno', class:'green darken-2 white--text'},
                { text: 'HORA', align: 'start', value: 'hora', class:'green darken-2 white--text'},
                { text: 'SOLICITANTE', value: 'nombre_dni_solicitante', class:'green darken-2 white--text' },
                { text: 'ABOGADO', value: 'nombre_abogado', class:'green darken-2 white--text' },
                { text: 'ESTADO', align: 'start', value: 'estado_nombre', class:'green darken-2 white--text' },
                { text: 'ASISTENCIA', align: 'center', value: 'estado', sortable: false, class:'green darken-2 white--text' },
            ],
            tramite_id: this.tipoTramite,
            loading: false,
        }
    },

    methods: {
        buscar(){
            this.loading = true;
            Inertia.get('/historial-turnos', { tipo_tramite_id: this.tramite_id , desde: this.fecha, hasta: this.fecha2 }, {
                onSuccess: page => {
                    this.loading = false;
                },
                onError: errors => {
                    this.error= true;
                },
            })
        }
    }
}
</script>
