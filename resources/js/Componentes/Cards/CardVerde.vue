<template>
    <v-alert outlined type="success" text>
        <div class="MyriadProBlackCond green--text justify-start text-2xl pb-2"> {{ titulo }} </div>
        <v-flex class="MyriadProBlackCond green--text text-2xl" align="center">
            {{ texto1 }} <div class="MyriadPro-LightCond green--text text-2xl pl-2">{{ descripcion1 }}</div>
        </v-flex>
        <v-flex class="MyriadProBlackCond green--text text-2xl" align="center">
            {{ texto2 }} <div class="MyriadPro-LightCond green--text text-2xl pl-2">{{ descripcion2 }}</div>
        </v-flex>
    </v-alert>
</template>

<script>
export default {
    name: "CardVerde",
    props: {
        titulo: String,
        texto1: String,
        descripcion1: String,
        texto2: String,
        descripcion2: String,
    },
}
</script>