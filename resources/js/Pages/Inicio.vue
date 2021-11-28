<template>
    <layout-no-registrado>
        <div>
            <Titulo texto="TRÁMITES"/>
            <descripcion-big texto="Para ver los requisitos a presentar, seleccione uno de los trámites"/>
            <card-tramites class="pt-8 pb-16"/>
    
            <v-row class="pt-8 pb-16">
                <v-col cols="12" lg="8" sm="12" xs="12">
                    <carrousel/>
                </v-col>
                <v-col cols="12" lg="4" sm="12" xs="12">
                    <card-bolsa-trabajo/>
                </v-col>
            </v-row>
        </div>
    </layout-no-registrado>
</template>

<script>
import LayoutNoRegistrado from "../Layouts/LayoutNoRegistrado";
import Titulo from '../Componentes/Titulo';
import CardTramites from '../Inicio/CardTramites';
import CardBolsaTrabajo from '../Inicio/CardBolsaTrabajo';
import CardAppTrabajo from '../Inicio/CardAppTrabajo';
import DescripcionBig from "../Componentes/DescripcionBig.vue";
import Carrousel from "../Componentes/Carrousel.vue"

export default {
    name: "Inicio",
    components: {LayoutNoRegistrado, Titulo, CardTramites, CardBolsaTrabajo, CardAppTrabajo,DescripcionBig,Carrousel, CardBolsaTrabajo}
}
</script>
