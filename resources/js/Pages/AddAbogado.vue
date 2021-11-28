<template>
    <layout-registrado>
        <titulo texto="Añadir Abogado"/>
                     <form @submit.prevent="submit">
                                                 <v-row>
                            <v-col cols="12" sm="12" lg="6">
                                <div v-if="errors.nombrep" class="MyriadPro-Cond text-xl red--text">{{ errors.nombrep }}</div>
                                <label-input texto="Nombre"/>
                                <text-field  v-model="form.nombre" icon="mdi-account"/>
                            </v-col>
                            <v-col cols="12" sm="12" lg="6">
                                <div v-if="errors.apellidop" class="MyriadPro-Cond text-xl red--text">{{ errors.apellidop }}</div>
                                <label-input texto="Apellido"/>
                                <text-field v-model="form.apellido"   icon="mdi-account"/>
                            </v-col>
                        </v-row>

                        <v-row>
                            <v-col cols="12" sm="12" lg="6">
                                <div v-if="errors.dnip" class=" MyriadPro-Cond  text-xl red--text">{{ errors.dnip }}</div>
                                <label-input texto="DNI"/>
                                <text-field v-model.number="form.dni" tipo="number" icon="mdi-card-account-details"/>
                            </v-col>
                            <v-col cols="12" sm="12" lg="6">
                                 <div v-if="errors.telefono" class="MyriadPro-Cond text-xl red--text">{{ errors.telefonop }}</div>
                                <label-input texto="Teléfono"/>
                                <text-field  v-model.number="form.telefono"  tipo="number" icon="mdi-phone"/>
                            </v-col>
                        </v-row>

                         <v-row>
                            <v-col cols="12" sm="12" lg="6">
                                <div v-if="errors.domicilio" class="MyriadPro-Cond  text-xl red--text">{{ errors.domiciliop }}</div>
                                <label-input texto="Domicilio"/>
                                <text-field v-model="form.domicilio" icon="mdi-home"/>
                            </v-col>

                            <v-col cols="12" sm="12" lg="6">
                                <div v-if="errors.localidad" class="MyriadPro-Cond  text-xl red--text">{{ errors.localidadp }}</div>
                                <label-input texto="Localidad"/>
                                <autocomplete-field :data="dataLocalidades" nombre="nombre" v-model="form.localidad_id" icon="mdi-map-marker"/>
                            </v-col>
                        </v-row>

                        
                        <div v-if="errors.correop" class=" MyriadPro-Cond text-xl red--text">{{ errors.correop }}</div>
                        <label-input texto="Correo electrónico"/>
                        <text-field v-model="form.correo" icon="mdi-email"/>

                                    <v-btn type="submit" color="light-green darken-1" elevation="0" dark block height="55">
                                        <div class="MyriadPro-Cond text-xl">Confirmar Turno</div>
                                    </v-btn>

                     </form>
    </layout-registrado>
</template>

<script>
import NavbarRegistrado from "../Layouts/Componentes/NavbarRegistrado";
import Titulo from '../Componentes/Titulo.vue';
import LayoutRegistrado from "../Layouts/LayoutRegistrado";
import { Inertia } from '@inertiajs/inertia';
import TextField from '../Componentes/TextField';
import LabelInput from '../Componentes/LabelInput.vue';
import AutocompleteField from '../Componentes/AutocompleteField.vue';

export default {
    components:{NavbarRegistrado,LayoutRegistrado,Titulo,TextField,LabelInput,AutocompleteField},

    props:{
        errors: Object,
        dataLocalidades: Array,
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
                localidad_id: null,
                telefono: null,
                correo: null,
        })
    }
    },

    methods: {
        submit() {
        Inertia.post('/nuevo-abogado', this.form, {
                onSuccess: page => {
                    this.dialog = true;
                    this.form.reset();
                },
                onError: errors => {
                    this.error= true;
                },
            })
        }
    }

}
</script>