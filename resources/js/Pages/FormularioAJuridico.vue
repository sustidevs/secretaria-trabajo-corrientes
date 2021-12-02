<template>
    <LayoutNoRegistrado>
        <v-container class="py-4">
            <div class="m-2 items-center">
                <titulo-tramite texto="Solicitud de asesoramiento jurídico"/>
                <descripcion class="justify-center text-2xl pb-7"
                             texto="Complete el siguiente formulario con los datos correspondientes para obtener un turno."/>
            </div>
            <v-stepper v-model="e1">
                <v-stepper-header>
                    <v-stepper-step class="MyriadPro-Cond text-xl" color="light-green darken-3" :complete="e1 > 1" step="1">
                        DATOS DEL RECLAMANTE
                    </v-stepper-step>

                    <v-divider></v-divider>

                    <v-stepper-step class="MyriadPro-Cond text-xl" color="light-green darken-3" :complete="e1 > 2" step="2">
                        TRÁMITE
                    </v-stepper-step>
                </v-stepper-header>

                <v-stepper-items>
                    <v-stepper-content step="1">
                        <v-row>
                            <v-col cols="12" sm="12" lg="6">
                                <div v-if="errors.nombre" class="MyriadPro-Cond  text-xl red--text">{{ errors.nombre }}</div>
                                <label-input texto="Nombre"/>
                                <text-field v-model="form.nombre" icon="mdi-account"/>
                            </v-col>
                            <v-col cols="12" sm="12" lg="6">
                                <div v-if="errors.apellido" class="MyriadPro-Cond text-xl red--text">{{ errors.apellido }}</div>
                                <label-input texto="Apellido"/>
                                <text-field v-model="form.apellido" icon="mdi-account"/>
                            </v-col>
                        </v-row>

                        <v-row>
                            <v-col cols="12" sm="12" lg="6">
                                <div v-if="errors.dni" class="MyriadPro-Cond text-xl red--text">{{ errors.dni }}</div>
                                <label-input texto="DNI"/>
                                <text-field v-model="form.dni" tipo="number" icon="mdi-card-account-details"/>
                            </v-col>
                            <v-col cols="12" sm="12" lg="6">
                                <div v-if="errors.telefono" class="MyriadPro-Cond text-xl red--text">{{ errors.telefono }}</div>
                                <label-input texto="Teléfono"/>
                                <text-field tipo="number" v-model="form.telefono" icon="mdi-phone"/>
                            </v-col>
                        </v-row>

                        <v-row>
                            <v-col cols="12" sm="12" lg="6">
                                <div v-if="errors.domicilio" class="MyriadPro-Cond  text-xl red--text">{{ errors.domicilio }}</div>
                                <label-input texto="Domicilio"/>
                                <text-field v-model="form.domicilio" icon="mdi-home"/>
                            </v-col>
                            <v-col cols="12" sm="12" lg="6">
                                <div v-if="errors.localidad" class="MyriadPro-Cond  text-xl red--text">{{ errors.localidad }}</div>
                                <label-input texto="Localidad"/>
                                <autocomplete-field :data="dataLocalidades" nombre="nombre" v-model="form.localidad" icon="mdi-map-marker"/>
                            </v-col>
                        </v-row>

                        <div v-if="errors.correo" class="MyriadPro-Cond text-xl red--text">{{ errors.correo }}</div>
                        <label-input texto="Correo electrónico"/>
                        <text-field type="email" v-model="form.correo" icon="mdi-email"/>

                        <v-row justify="center" class="py-7">
                            <v-col cols="3">
                                <v-btn color="light-green darken-1" elevation="0" dark @click="e1 = 2" block height="55">
                                    <div class="MyriadPro-Cond text-xl">Continuar</div>
                                </v-btn>
                            </v-col>
                        </v-row>
                    </v-stepper-content>

                    <v-stepper-content step="2">
                        <v-row>
                            <v-col cols="12" sm="12" lg="6">
                                <div v-if="errors.tipo_tramite_id" class="MyriadPro-Cond text-xl red--text">{{ errors.tipo_tramite_id }}</div>
                                <label-input texto="Seleccione un motivo"/>
                                <autocomplete-field v-model="form.tipo_tramite_id" nombre="descripcion" :data="this.dataTramites" icon="mdi-file-document-multiple"/>
                            </v-col>
                            <v-col cols="12" sm="12" lg="6">
                                <div class="d-flex row pt-9 justify-center">
                                  <v-icon color="green">mdi-map-marker</v-icon>
                                    <div class="MyriadPro-Cond text-3xl my-5 green--text">Delegacion : Corrientes, Capital</div>
                                </div>
                            </v-col>
                        </v-row>

                        <v-row justify="center" class="py-7">
                            <v-col cols="3">
                                <v-btn elevation="0" @click="e1 = 1" block height="55">
                                    <div class="MyriadPro-Cond text-xl">Volver</div>
                                </v-btn>
                            </v-col>
                            <v-col cols="3">
                                <inertia-link href='/solicitar-asesoramiento' :data="{ tramite:form.tipo_tramite_id }" preserve-state>
                                    <v-btn color="light-green darken-1" elevation="0" dark block height="55">
                                        <div class="MyriadPro-Cond text-xl">Elegir fecha del turno</div>
                                    </v-btn>
                                </inertia-link>
                            </v-col>
                        </v-row>

                        <div v-if="buscoFecha">
                            <v-row>
                                <v-col cols="12" sm="12" lg="6">
                                    <label-input class="pb-2" texto="Seleccione una fecha"/>
                                    <select class="rounded bg-gray-100 w-full focus:ring-2 focus:ring-black"
                                            label="Fecha"  v-model="form.fecha">
                                        <option v-for="(horarios, fecha) in dataFechas" :key="fecha" >
                                            {{fecha}}
                                        </option>
                                    </select>
                                </v-col>
                                <v-col cols="12" sm="12" lg="6">
                                    <label-input class="pb-2" texto="Seleccione un horario"/>
                                    <select class="rounded bg-gray-100 w-full focus:ring-2 focus:ring-black"
                                            label="Localidad" v-model="form.hora">
                                        <option v-for="i in getHorario(dataFechas,form.fecha)" :key="i"
                                        >
                                            {{ i }}
                                        </option>
                                    </select>
                                </v-col>
                            </v-row>
                            <v-row justify="center" class="py-7">
                                <v-col cols="3">
                                    <v-btn @click="submit()" type="submit" color="light-green darken-1" elevation="0" dark block height="55">
                                        <div class="MyriadPro-Cond text-xl">Confirmar Turno</div>
                                    </v-btn>
                                </v-col>
                            </v-row>
                        </div>
                    </v-stepper-content>
                </v-stepper-items>
            </v-stepper>

            <modal-turno :dataTurno="this.dataTurno" :dialog="dialog" @cerrar="show = false"/>

        </v-container>
    </LayoutNoRegistrado>
</template>

<script>
import LayoutNoRegistrado from "../Layouts/LayoutNoRegistrado";
import TituloTramite from '../Componentes/TituloTramite';
import Descripcion from '../Componentes/Descripcion';
import TextField from '../Componentes/TextField';
import LabelInput from '../Componentes/LabelInput.vue';
import AutocompleteField from '../Componentes/AutocompleteField.vue';
import ModalTurno from '../Componentes/Modals/ModalTurno';
import {Inertia} from "@inertiajs/inertia";

export default {
    name: 'FormularioAJuridico',
    components: { ModalTurno, LayoutNoRegistrado, TituloTramite, Descripcion, TextField, LabelInput, AutocompleteField},
    props: {
        texto: String,
        errors: Object,
        dataDelegaciones: Array,
        dataLocalidades: Array,
        dataTramites: Array,
        tramiteAsesoramiento: Boolean,
        verifica_turno: Boolean,
        dataTurno: Object,
        dataFechas: Array,
        buscoFecha: Boolean,
    },

    data () {
        return {
            dialog:false,
            e1: 1,
            form: this.$inertia.form ({
                //Reclamante
                nombre: null,
                apellido: null,
                dni: null,
                domicilio: null,
                localidad: null,
                telefono: null,
                correo: null,
                //Abogado
                posee_abogado: false,
                //Turno
                tipo_tramite_id: null,
                delegacion_id: null,
                fecha:null,
                hora:null,
            }),
        }
    },
    methods: {
        getHorario (items, fecha) {
            return items [fecha]
        },

        submit() {
            this.loader = 'loading';
            Inertia.post('/solicitar-asesoramiento', this.form, {
                onSuccess: page => {
                    this.dialog = true;
                    this.form.reset();
                    this.e1=1;
                    this.esconder=0;
                    this.esconder2=0;
                },
                onError: errors => {
                    this.error= true;
                    this.e1=1;
                    this.esconder=0;
                    this.esconder2=0;
                },
            })
            this.dialog = true;
        },
    }
}
</script>
