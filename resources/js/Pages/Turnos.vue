<template>
    <layout-registrado>
        <v-row no-gutters class="my-6">
            <v-col cols="12" lg="6" justify="start">
                <div class="MyriadPro-Cond grey--text text--darken-4 text-5xl">
                    Listado de turnos
                </div>
            </v-col>
            <v-col cols="12" lg="6" align="end" justify="end">
                <div class="MyriadPro-Cond grey--text text--darken-4 text-5xl">
                    {{this.dataFecha}}
                </div>
            </v-col>
        </v-row>

        <v-divider class="my-2"></v-divider>

            <div class="MyriadPro-Cond grey--text text--darken-4 text-2xl my-2">
                Seleccione un Tipo de Trámite
            </div>

                <v-row justify="center" align="center">
                     <v-btn-toggle  v-for="tramite in dataTramites" :key="tramite.id" :value="tramite.id"  v-model="toggle_exclusive">
                        <v-hover v-slot="{ hover }" >
                             <inertia-link href="/turnos" :data="{ tramite: tramite.id }" preserve-state>
                                <v-btn :value="tramite.id" rounded width="auto" :class="hover ? 'light-green darken-3' : 'grey lighten-3'" class="pa-5 ma-4 grey--text text--darken-4">

                                        <div :class="hover ? 'white--text' : 'black--text'" class="MyriadPro-Cond  text-2xl">
                                            {{ tramite.name }}
                                        </div>
                                </v-btn>
                             </inertia-link>
                        </v-hover>
                     </v-btn-toggle>
                </v-row>



        <v-divider class="my-5"></v-divider>

<div v-if="toggle_exclusive === 0">

</div>

<div v-if="toggle_exclusive === 1">
<tabla-turnos-asesoramiento :turnos="this.dataTurnos"/>
</div>

<div v-if="toggle_exclusive > 1">
     <tabla-turnos :turnos="this.dataTurnos" />
</div>


    </layout-registrado>
</template>

<script>
import NavbarRegistrado from "../Layouts/Componentes/NavbarRegistrado";
import LayoutRegistrado from "../Layouts/LayoutRegistrado";
import TablaTurnos from "../Componentes/TablaTurnos";
import TablaTurnosAsesoramiento from "../Componentes/TablaTurnosAsesoramiento";

export default {
    components: {NavbarRegistrado,LayoutRegistrado,TablaTurnos,TablaTurnosAsesoramiento},

    props: {
        dataTurnos: Array,
        dataFecha: String,
        dataTramites: Array,
        tipoTramite: Number || String,
        dataAbogados: Array,

    },

        data () {
        return {
            toggle_exclusive: 0,
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


}
</script>
