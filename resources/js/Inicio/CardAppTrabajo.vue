<template>

<div>
    <img width="750" :src="('./images/app_trabajo.jpg')">
</div>
<!--
    <v-row>
        <v-col cols="12">
            <card title="Aplicación Trabajo Corrientes" description="Descargá nuestra app y solicitá una Inspección Laboral." img="./images/aplicacion.png" textoBoton="Ver más"></card>
        </v-col>
    </v-row>-->
</template>

<script>
import Card from "../Componentes/Card";
export default {
    name: "CardAppTrabajo",
    components: {Card}
}
</script>
