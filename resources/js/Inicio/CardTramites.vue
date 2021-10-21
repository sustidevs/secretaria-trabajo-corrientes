<template>
    <v-row>
        <v-col cols="12" xl="4" lg="4" md="6" sm="12" xs="12">
            <card title="Ratificación" img="./images/cardTramites/ratificacion.svg" textoBoton="ver requisitos"></card>
        </v-col>
        <v-col cols="12" xl="4" lg="4" md="6" sm="12" xs="12">
            <card title="Consignación" img="./images/cardTramites/consignacion.svg" textoBoton="ver requisitos"></card>
        </v-col>
        <v-col cols="12" xl="4" lg="4" md="6" sm="12" xs="12">
            <card title="Rúbrica" img="./images/cardTramites/rubrica.svg" textoBoton="ver requisitos"></card>
        </v-col>
        <v-col cols="12" xl="4" lg="4" md="6" sm="12" xs="12">
            <card title="Mesa de Entradas" img="./images/cardTramites/mesaEntrada.svg" textoBoton="ver requisitos"></card>
        </v-col>
        <v-col cols="12" xl="4" lg="4" md="6" sm="12" xs="12">
            <card title="Formulación de Reclamos" img="./images/cardTramites/formulacionReclamos.svg" textoBoton="ver requisitos"></card>
        </v-col>
        <v-col cols="12" xl="4" lg="4" md="6" sm="12" xs="12">
            <card title="Asesoramiento Jurídico Gratuito" img="./images/cardTramites/asesoramiento.svg" textoBoton="ver requisitos"></card>
        </v-col>
    </v-row>
</template>

<script>
import Card from "../Componentes/Card";
export default {
    name: "CardTramites",
    components: {Card}
}
</script>
