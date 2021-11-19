<template>
    <v-row>
        <v-col cols="12" xl="4" lg="4" md="6" sm="12" xs="12">
            <boton-tramites title="Ratificación" img="./images/cardTramites/ratificacion.svg" link="/ratificacion"/>
        </v-col>

        <v-col cols="12" xl="4" lg="4" md="6" sm="12" xs="12">
             <boton-tramites title="Consignación" img="./images/cardTramites/consignacion.svg" link="/consignacion-presentacion-documentacion"/>
        </v-col>
        <v-col cols="12" xl="4" lg="4" md="6" sm="12" xs="12">
            <boton-tramites title="Rúbrica" img="./images/cardTramites/rubrica.svg" link="/rubrica"/>
        </v-col>
        <v-col cols="12" xl="4" lg="4" md="6" sm="12" xs="12">
            <boton-tramites title="Mesa de Entradas"  img="./images/cardTramites/mesaEntrada.svg" link="/mesa-entradas"/>
        </v-col>
        <v-col cols="12" xl="4" lg="4" md="6" sm="12" xs="12">
            <boton-tramites title="Formulación de Reclamos" img="./images/cardTramites/formulacionReclamos.svg" link="/formulacion-reclamos"/>
        </v-col>
        <v-col cols="12" xl="4" lg="4" md="6" sm="12" xs="12">
            <boton-tramites title="Asesoramiento Jurídico Gratuito" img="./images/cardTramites/asesoramiento.svg" link="/asesoramiento-juridico"/>
        </v-col>
    </v-row>
</template>

<script>
import Card from "../Componentes/Card";
import BotonTramites from "../Componentes/BotonTramites.vue"
export default {
    name: "CardTramites",
    components: {Card, BotonTramites}
}
</script>
