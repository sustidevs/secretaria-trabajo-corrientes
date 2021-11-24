<template>
    <LayoutNoRegistrado>
        <v-container class="py-4">
            <div class="m-2 items-center">
                <titulo-tramite texto="Solicitud de turno"/>
                <descripcion class="justify-center text-2xl pb-7"
                    texto="Complete el siguiente formulario con los datos del reclamante y del abogado para obtener un turno."/>
            </div>
             <form @submit.prevent="submit">
            <v-stepper v-model="e1">
                <v-stepper-header>
                    <v-stepper-step class="MyriadPro-Cond text-xl" color="light-green darken-3" :complete="e1 > 1" step="1">
                        DATOS DEL RECLAMANTE
                    </v-stepper-step>

                    <v-divider></v-divider>

                    <v-stepper-step class="MyriadPro-Cond text-xl" color="light-green darken-3" :complete="e1 > 2" step="2">
                        DATOS DEL ABOGADO
                    </v-stepper-step>

                    <v-divider></v-divider>

                    <v-stepper-step class="MyriadPro-Cond text-xl" color="light-green darken-3" step="3">
                        TRÁMITE
                    </v-stepper-step>
                </v-stepper-header>

                <v-stepper-items>
                    <v-stepper-content step="1">
                        <v-row>
                            <v-col cols="12" sm="12" lg="6">
                                <div v-if="errors.nombre" class="MyriadPro-Cond  text-xl red--text">{{ errors.nombre }}</div>
                                <label-input texto="Nombre"/>
                                <text-field  v-model="form.nombre" icon="mdi-account"/>
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
                                <text-field  v-model="form.domicilio"  icon="mdi-home"/>
                            </v-col>
                            <v-col cols="12" sm="12" lg="6">
                                <div v-if="errors.localidad" class="MyriadPro-Cond  text-xl red--text">{{ errors.localidad }}</div>
                                <label-input texto="Localidad"/>
                                <autocomplete-field :data="dataLocalidades" nombre="nombre"  v-model="form.localidad" icon="mdi-map-marker"/>
                            </v-col>
                        </v-row>

                        <label-input texto="Correo electrónico"/>
                        <text-field icon="mdi-email"/>
                    
                        <v-row justify="center" class="py-7">
                            <v-col cols="3">
                                <v-btn color="light-green darken-1" elevation="0" dark @click="e1 = 2" block height="55">
                                <div class="MyriadPro-Cond text-xl">Continuar</div>
                            </v-btn>
                            </v-col>
                        </v-row>
                    </v-stepper-content>


                    <!------datos abogado------>
                    <v-stepper-content step="2">
                        <v-row>
                            <v-col cols="12" sm="12" lg="6">
                                <div v-if="errors.nombrep" class="MyriadPro-Cond text-xl red--text">{{ errors.nombrep }}</div>
                                <label-input texto="Nombre"/>
                                <text-field  v-model="form.nombrep" icon="mdi-account"/>
                            </v-col>
                            <v-col cols="12" sm="12" lg="6">
                                <div v-if="errors.apellidop" class="MyriadPro-Cond text-xl red--text">{{ errors.apellidop }}</div>
                                <label-input texto="Apellido"/>
                                <text-field v-model="form.apellidop"   icon="mdi-account"/>
                            </v-col>
                        </v-row>

                        <v-row>
                            <v-col cols="12" sm="12" lg="6">
                                <div v-if="errors.dnip" class=" MyriadPro-Cond  text-xl red--text">{{ errors.dnip }}</div>
                                <label-input texto="DNI"/>
                                <text-field v-model.number="form.dnip" tipo="number" icon="mdi-card-account-details"/>
                            </v-col>
                            <v-col cols="12" sm="12" lg="6">
                                 <div v-if="errors.telefonop" class="MyriadPro-Cond text-xl red--text">{{ errors.telefonop }}</div>
                                <label-input texto="Teléfono"/>
                                <text-field  v-model.number="form.telefonop"  tipo="number" icon="mdi-phone"/>
                            </v-col>
                        </v-row>

                        <v-row>
                            <v-col cols="12" sm="12" lg="6">
                                <label-input texto="Domicilio"/>
                                <text-field icon="mdi-home"/>
                            </v-col>
                            <v-col cols="12" sm="12" lg="6">
                                <label-input texto="Localidad"/>
                                <autocomplete-field :data="dataLocalidades" nombre="nombre" v-model="form.localidadp" icon="mdi-map-marker"/>
                            </v-col>
                        </v-row>

                        <div v-if="errors.correop" class=" MyriadPro-Cond text-xl red--text">{{ errors.correop }}</div>
                        <label-input texto="Correo electrónico"/>
                        <text-field v-model="form.correop" icon="mdi-email"/>

                        <v-row justify="center" class="py-7">
                            <v-col cols="3">
                                <v-btn elevation="0" @click="e1 = 1" block height="55">
                                    <div class="MyriadPro-Cond text-xl">Volver</div>
                                </v-btn>
                            </v-col>
                            <v-col cols="3">
                                <v-btn color="light-green darken-1" elevation="0" dark @click="e1 = 3" block height="55">
                                    <div class="MyriadPro-Cond text-xl">Continuar</div>
                                </v-btn>
                            </v-col>
                        </v-row>
                    </v-stepper-content>

                    <v-stepper-content step="3">
                        <v-row>
                            <v-col cols="12" sm="12" lg="6">
                                <div v-if="errors.tipos_tramite_id" class=" MyriadPro-Cond red--text text-xl">
                                {{ errors.tipos_tramite_id }}
                                </div>

                                <label-input texto="Tipo de Trámite"/>
                                <autocomplete-field  v-model="form.tipos_tramite_id"  nombre="descripcion" :data="this.dataTramites" icon="mdi-file-document-multiple"/>
                            </v-col>
                            <v-col cols="12" sm="12" lg="6">
                                <label-input texto="Delegación"/>
                                <autocomplete-field  v-model="form.delegacion_id" nombre="nombre" :data="this.dataDelegaciones" icon="mdi-map-marker"/>
                            </v-col>


                        </v-row>

<v-row justify="center">
                 <inertia-link href="/solicitar-turno" :data="{ tramite:form.tipos_tramite_id }" preserve-state>
                              <v-btn  color="light-green darken-1" elevation="0" dark block height="55">
                                        <div class="MyriadPro-Cond text-xl">Buscar fecha y hora disponibles</div>
                                    </v-btn>
                          </inertia-link>
</v-row>
             
                

                <div v-if="buscoFecha">
                    <v-row>
                        <v-col cols="12" sm="12" lg="6">
                        <label-input class="pb-2" texto="Seleccione una fecha"/>
                             <select class="rounded bg-gray-100 w-full focus:ring-2 focus:ring-black"
                                            label="Localidad"  v-model="form.fecha">
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
                            
                            <!--<v-col cols="3">
                                <v-btn elevation="0" @click="e1 = 2" block height="55">
                                    <div class="MyriadPro-Cond text-xl">Volver</div>
                                </v-btn>
                            </v-col>-->
                            <v-col cols="3">
                                    <v-btn type="submit" color="light-green darken-1" elevation="0" dark block height="55">
                                        <div class="MyriadPro-Cond text-xl">Confirmar Turno</div>
                                    </v-btn>
                            </v-col>
                        </v-row>

                </div>

                    </v-stepper-content>
                </v-stepper-items>
                
            </v-stepper>
                        </form>

                                    <modal-turno :dataTurno="this.dataTurno"
                         :dialog="dialog" @cerrar="show = false"/>


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
import { Inertia } from '@inertiajs/inertia'

export default {
    name: 'Formulario',
    components: { ModalTurno, LayoutNoRegistrado, TituloTramite, Descripcion, TextField, LabelInput, AutocompleteField},

    props: {
        errors: Object,
        dataDelegaciones: Array,
        dataLocalidades: Array,
        dataTramites: Array,
        tramiteAsesoramiento: Boolean,
        verifica_turno: Boolean,
        dataTurno: Object,
        dataFechas: Object,
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
                nombrep: null,
                apellidop: null,
                dnip: null,
                domiciliop: null,
                localidadp: null,
                telefonop: null,
                correop: null,
                posee_abogado: true,
                //Turno
                delegacion_id: 3,
                tipos_tramite_id: null,
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
            Inertia.post('/solicitar-turno', this.form, {
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
        },
    }
}
</script>