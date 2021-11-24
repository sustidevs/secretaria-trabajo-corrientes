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

        <v-row class="my-2">
                <div class="MyriadPro-Cond grey--text text--darken-4 text-2xl my-2">
                    Seleccione un Tipo de Trámite
                </div>
                
            <div v-for="tramite in dataTramites" :key="tramite.id" :value="tramite.id">
                                <v-btn-toggle v-model="toggle_exclusive">
                        <v-hover v-slot="{ hover }" >
                            <v-btn rounded width="auto" :class="hover ? 'light-green darken-3' : 'grey lighten-3'" class="pa-5 mr-4 grey--text text--darken-4">
                                <div class="d-flex flex-column justify-center">
                                    <div :class="hover ? 'white--text' : 'black--text'" class="MyriadPro-Cond  text-2xl">
                                                                            {{ tramite.name }}

                                    </div>
                                </div>
                            </v-btn>
                        </v-hover>
                    </v-btn-toggle>
            </div>
        </v-row>

        <v-divider class="my-5"></v-divider>

        <!--<tabla-turnos-asesoramiento/>-->
        <tabla-turnos :headers="this.headers"/>
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
        tipoTramite: String,
        dataAbogados: Array
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

        computed: {
        datos () {
            return this.dataTurnos
        }
    },
    methods: {
        buscar_por_tramite (tipo_id) {
            this.$inertia.post('/turnos', tipo_id)
        },
        asistio (item) {
            item.estado = 1;
            this.$inertia.post('/turnos', item)
        },
        ausente (item) {
            item.estado = 2;
            this.$inertia.post('/turnos', item)
        },
        getColor (estado_nombre) {
            if (estado_nombre === 'Ausente') return 'ausente--text'
            else if (estado_nombre === 'Presente') return 'presente--text'
            else return 'pendiente--text'
        },
    },


}
</script>
