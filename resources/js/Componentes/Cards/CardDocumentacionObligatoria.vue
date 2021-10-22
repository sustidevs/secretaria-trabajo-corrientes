<template>
    <div>
        <div class="flex MyriadProBlackCond grey--text text--darken-3 text-3xl pb-3 rounded-tl-lg">
            <v-icon color="grey darken-3" medium class="pr-2">mdi-text-box-multiple-outline</v-icon>
            Documentación Obligatoria
        </div>
        <div class="pr-9" v-for="requisito in dataRequisitos.requisitos" :key="requisito.id"
                name="requisitos_id">
            <v-flex class="MyriadPro-Cond text-3xl justify-start align-start">
                <v-icon color="grey darken-3" class="pr-2" align="start" justify="start">mdi-check-bold</v-icon>
                {{ requisito.titulo }}
            </v-flex>
            <v-flex class="MyriadPro-LightCond text-2xl pl-8 pb-3">
                {{ requisito.descripcion }}
            </v-flex>
        </div>
        <div v-if="this.dataRequisitos.aclaracion.length === 0" />
        <div v-else class="MyriadPro-Cond text-3xl pb-3" v-for="requisito in dataRequisitos.aclaracion"
                :key="requisito.id" name="aclaracion_id">
            <v-icon color="black" class="pr-2">mdi-check-bold</v-icon>
            {{ requisito.descripcion }}
        </div>
    </div>
</template>

<script>
export default {
    name: "CardVerde",
    props: {
        titulo: String,
        descripcion: String,
    },
}
</script>