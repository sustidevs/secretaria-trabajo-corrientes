<template>
    <LayoutNoRegistrado>
        <v-container class="py-4">
             <form @submit.prevent="submit">
                 <div class="m-2 items-center">
                <titulo-tramite class="pb-7" texto="Solicitud de turno"/>
            </div>
            
            <v-card
                elevation="0"
            >
                <v-row>
                    <v-col cols="12" sm="12" lg="6">
                        <label-input class="pb-2" texto="Seleccione una fecha"/>
                             <select class="rounded bg-gray-100 w-full focus:ring-2 focus:ring-black"
                                            label="Localidad"  v-model="form.fecha">
                                        <option v-for="(horarios, fecha) in dataFechas" :key="fecha" name="delegacion_id">
                                            {{fecha}}
                                        </option>
                                    </select>
                    </v-col>
                    <v-col cols="12" sm="12" lg="6">
                        <label-input class="pb-2" texto="Seleccione un horario"/>
                        <select class="rounded bg-gray-100 w-full focus:ring-2 focus:ring-black"
                                            label="Localidad" v-model="form.hora">
                                        <option v-for="i in getHorario(dataFechas,form.fecha)" :key="i"
                                                name="delegacion_id">
                                            {{ i }}
                                        </option>
                                    </select>
                    </v-col>
                </v-row>
            </v-card>

            <v-row justify="center" class="py-7">
                <v-col cols="3">
                    <inertia-link href='/'>
                        <v-btn elevation="0" @click="e1 = 2" block height="55">
                            <div class="MyriadPro-Cond text-xl">Cancelar</div>
                        </v-btn>
                    </inertia-link>
                </v-col>
                <v-col cols="3">
                    <v-btn type="submit" color="light-green darken-1" elevation="0" dark block height="55" @click="show = true">
                        <div class="MyriadPro-Cond text-xl">Solicitar turno</div>
                    </v-btn>
                </v-col>
            </v-row>
             </form>
            <modal-turno :dataTurno="this.dataTurno"
                         :dialog="guardo" @cerrar="show = false"/>
        </v-container>
    </LayoutNoRegistrado>
</template>

<script>
import LayoutNoRegistrado from "../Layouts/LayoutNoRegistrado";
import TituloTramite from '../Componentes/TituloTramite';
import LabelInput from '../Componentes/LabelInput';
import AutocompleteField from '../Componentes/AutocompleteField';
import ModalTurno from '../Componentes/Modals/ModalTurno';
import { Inertia } from '@inertiajs/inertia'

export default {
    name: 'ElegirFecha',
    components: { LayoutNoRegistrado, TituloTramite, AutocompleteField, LabelInput, ModalTurno},

    props: {
        errors: Object,
        oficina_id: Number,
        delegacion: Number,
        tipoTramite: Number,
        dataFechas: Object,
        dataSolicitante: Object,
        dataAbogado: Object,
        dataTurno: Array,
        guardo: {type: Boolean, default: false}
    },

    data () {
        return {
            show: false,
                 
             form: this.$inertia.form ({
                //Oficina
                oficina_id: this.oficina_id,
                //Solicitante
                solicitante_id: this.dataSolicitante.id,
                //Abogado
                abogado_id: this.dataAbogado.id,
                //Turno
                fecha: null,
                hora: null,
            }),
        }
    },

    methods: {
         getHorario (items, fecha) {
            return items [fecha]
        },
        submit() {
            this.loader = 'loading';
            Inertia.post('/guardar-turno', this.form, {
                onSuccess: page => {
                    this.form.reset();
                    this.dialog=true;
                },
                onError: errors => {
                    this.error= true;
                },
            })
        },
    }
}
</script>

<style>
[type='text']:focus, [type='email']:focus, [type='url']:focus, [type='password']:focus, [type='number']:focus, [type='date']:focus, [type='datetime-local']:focus, [type='month']:focus, [type='search']:focus, [type='tel']:focus, [type='time']:focus, [type='week']:focus, [multiple]:focus, textarea:focus, select:focus {
    outline: 2px solid transparent;
    outline-offset: 2px;
    --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: #4caf5000;
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
    border-color: #9CCC65;
    font-size: 22px !important;
}
</style>
