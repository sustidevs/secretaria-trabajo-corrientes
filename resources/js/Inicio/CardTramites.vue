<template>
    <v-row>
        <v-col cols="12" xl="4" lg="4" md="6" sm="12" xs="12">
            <card title="Ratificación" img="" textoBoton="ver requisitos"></card>
        </v-col>
        <v-col cols="12" xl="4" lg="4" md="6" sm="12" xs="12">
            <card title="Consignación" img="" textoBoton="ver requisitos"></card>
        </v-col>
        <v-col cols="12" xl="4" lg="4" md="6" sm="12" xs="12">
            <card title="Rúbrica" img="" textoBoton="ver requisitos"></card>
        </v-col>
        <v-col cols="12" xl="4" lg="4" md="6" sm="12" xs="12">
            <card title="Mesa de Entradas" img="" textoBoton="ver requisitos"></card>
        </v-col>
        <v-col cols="12" xl="4" lg="4" md="6" sm="12" xs="12">
            <card title="Formulación de Reclamos" img="" textoBoton="ver requisitos"></card>
        </v-col>
        <v-col cols="12" xl="4" lg="4" md="6" sm="12" xs="12">
            <card title="Asesoramiento Jurídico Gratuito" img="" textoBoton="ver requisitos"></card>
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
