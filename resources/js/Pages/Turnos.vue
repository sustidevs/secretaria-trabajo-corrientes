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
                    27-11-2021
                </div>
            </v-col>
        </v-row>

        <v-divider class="my-2"></v-divider>

        <v-row class="my-2">
            <v-col cols="12" lg="6">
                <div class="MyriadPro-Cond grey--text text--darken-4 text-2xl my-2">
                    Seleccione un Tipo de Trámite
                </div>

                <v-btn-toggle v-model="toggle_exclusive">
                    <v-hover v-slot="{ hover }" >
                        <v-btn rounded width="auto" :class="hover ? 'light-green darken-3' : 'grey lighten-3'" class="pa-5 mr-4 grey--text text--darken-4">
                            <div class="d-flex flex-column justify-center">
                                <div :class="hover ? 'white--text' : 'black--text'" class="MyriadPro-Cond  text-2xl">
                                    Consignación
                                </div>
                            </div>
                        </v-btn>
                    </v-hover>

                    <v-hover v-slot="{ hover }" >
                        <v-btn rounded width="auto" :class="hover ? 'light-green darken-3' : 'grey lighten-3'" class="pa-5 grey--text text--darken-4">
                            <div class="d-flex flex-column justify-center">
                                <div :class="hover ? 'white--text' : 'black--text'" class="MyriadPro-Cond  text-2xl">
                                    Consignación
                                </div>
                            </div>
                        </v-btn>
                    </v-hover>
                </v-btn-toggle>
            </v-col>
        </v-row>

        <v-divider class="my-5"></v-divider>

        <tabla-turnos-asesoramiento/>
        <!--<tabla-turnos/>-->
    </layout-registrado>
</template>

<script>
import NavbarRegistrado from "../Layouts/Componentes/NavbarRegistrado";
import LayoutRegistrado from "../Layouts/LayoutRegistrado";
import TablaTurnos from "../Componentes/TablaTurnos";
import TablaTurnosAsesoramiento from "../Componentes/TablaTurnosAsesoramiento";

export default {
    components: {NavbarRegistrado,LayoutRegistrado,TablaTurnos,TablaTurnosAsesoramiento}
}
</script>
