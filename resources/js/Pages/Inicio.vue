<template>
    <layout-no-registrado>
        <div>
            <Titulo texto="TRÁMITES"/>
            <descripcion-big texto="Para ver los requisitos a presentar, seleccione uno de los trámites"/>
            <card-tramites class="pt-8 pb-16"/>

            <div v-if="$vuetify.breakpoint.xsOnly">
                <v-divider  color="black"></v-divider>
                <card-mobile class="pt-4" img="./images/Mobile/tasas_mobile.png" titulo="Pago de Tasas" link="/tasas" descripcion="Se podran abonar multas y otras tasas de Secretaria de Trabajo por medio de Red link, Link Celular. Es facil y practico, hace click en el botón para acceder a un tutorial de cómo realizarlo " textoBoton="Ver Tutorial"/>
                <v-divider color="black"></v-divider>
                <card-mobile class="pt-4" img="./images/Mobile/apptrabajomobile.png"  titulo="App Trabajo" link="/tasas" descripcion="Optimiza las inspecciones laborales que se realicen en el ambito de la provincia. Es practico y sencillo. Hace click en el botón para ver como descargaar y usarlo" textoBoton="Ver app"/>
                <v-divider color="black"></v-divider>
                <card-mobile class="pt-4" img="./images/bolsa-unne.png"  titulo="Bolsa de Trabajo de la UNNE" link="/tasas" descripcion="Verificá si hay puestos de trabajo disponibles para sumarte" textoBoton="Ingresa"/>
            </div>
            <div v-if="$vuetify.breakpoint.smOnly || $vuetify.breakpoint.mdOnly || $vuetify.breakpoint.lgOnly || $vuetify.breakpoint.xlOnly">
                <v-row>
                    <v-col cols="12" lg="9" sm="12" xs="12">
                        <carrousel/>
                    </v-col>
                    <v-col cols="12" lg="3" sm="12" xs="12">
                        <card-bolsa-trabajo/>
                    </v-col>
                </v-row>
            </div>

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
import CardMobile from "../Componentes/Cards/CardMobile";

export default {
    name: "Inicio",
    components: {
        CardMobile,
        LayoutNoRegistrado, Titulo, CardTramites, CardAppTrabajo,DescripcionBig,Carrousel, CardBolsaTrabajo}
}
</script>
