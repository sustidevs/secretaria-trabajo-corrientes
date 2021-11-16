<template>
    <LayoutNoRegistrado>
        <v-container class="py-4">
            <div class="m-2 items-center">
                <titulo-tramite texto="Solicitud de turno"/>
                <descripcion class="justify-center text-2xl pb-7"
                    texto="Complete el siguiente formulario con los datos correspondientes para obtener un turno."/>
            </div>
            <v-stepper v-model="e1">
                <v-stepper-header class="light-green lighten-1">
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
                                <label-input texto="Nombre"/>
                                <text-field icon="mdi-account"/>
                            </v-col>
                            <v-col cols="12" sm="12" lg="6">
                                <label-input texto="Apellido"/>
                                <text-field icon="mdi-account"/>
                            </v-col>
                        </v-row>

                        <v-row>
                            <v-col cols="12" sm="12" lg="6">
                                <label-input texto="DNI"/>
                                <text-field tipo="number" icon="mdi-card-account-details"/>
                            </v-col>
                            <v-col cols="12" sm="12" lg="6">
                                <label-input texto="Teléfono"/>
                                <text-field tipo="number" icon="mdi-phone"/>
                            </v-col>
                        </v-row>

                        <v-row>
                            <v-col cols="12" sm="12" lg="6">
                                <label-input texto="Domicilio"/>
                                <text-field icon="mdi-home"/>
                            </v-col>
                            <v-col cols="12" sm="12" lg="6">
                                <label-input texto="Localidad"/>
                                <autocomplete-field icon="mdi-map-marker"/>
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

                    <v-stepper-content step="2">
                        <v-row>
                            <v-col cols="12" sm="12" lg="6">
                                <label-input texto="Nombre"/>
                                <text-field icon="mdi-account"/>
                            </v-col>
                            <v-col cols="12" sm="12" lg="6">
                                <label-input texto="Apellido"/>
                                <text-field icon="mdi-account"/>
                            </v-col>
                        </v-row>

                        <v-row>
                            <v-col cols="12" sm="12" lg="6">
                                <label-input texto="DNI"/>
                                <text-field tipo="number" icon="mdi-card-account-details"/>
                            </v-col>
                            <v-col cols="12" sm="12" lg="6">
                                <label-input texto="Teléfono"/>
                                <text-field tipo="number" icon="mdi-phone"/>
                            </v-col>
                        </v-row>

                        <v-row>
                            <v-col cols="12" sm="12" lg="6">
                                <label-input texto="Domicilio"/>
                                <text-field icon="mdi-home"/>
                            </v-col>
                            <v-col cols="12" sm="12" lg="6">
                                <label-input texto="Localidad"/>
                                <autocomplete-field icon="mdi-map-marker"/>
                            </v-col>
                        </v-row>

                        <label-input texto="Correo electrónico"/>
                        <text-field icon="mdi-email"/>

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
                        <v-card
                        class="mb-12"
                        color="grey lighten-1"
                        height="200px"
                        ></v-card>

                        <v-row justify="center" class="py-7">
                            <v-col cols="3">
                                <v-btn elevation="0" @click="e1 = 2" block height="55">
                                    <div class="MyriadPro-Cond text-xl">Volver</div>
                                </v-btn>
                            </v-col>
                            <v-col cols="3">
                                <v-btn color="light-green darken-1" elevation="0" dark @click="e1 = 3" block height="55">
                                    <div class="MyriadPro-Cond text-xl">Elegir fecha del turno</div>
                                </v-btn>
                            </v-col>
                        </v-row>

                    </v-stepper-content>
                </v-stepper-items>
            </v-stepper>
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
export default {
    name: 'Formulario',
    components: { LayoutNoRegistrado, TituloTramite, Descripcion, TextField, LabelInput, AutocompleteField},
    props: {
        texto: String,
    },
    data () {
        return {
        e1: 1,
        }
    },
}
</script>