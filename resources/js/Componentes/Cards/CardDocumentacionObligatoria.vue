<template>
    <div>
        <div class="flex MyriadProBlackCond grey--text text--darken-3 text-3xl pb-3 rounded-tl-lg">
            <v-icon color="grey darken-3" medium class="pr-2">mdi-text-box-multiple-outline</v-icon>
            Documentación Obligatoria
        </div>
        <div class="pr-9">
            <v-flex class="MyriadPro-Cond text-3xl justify-start align-start">
                <v-icon color="grey darken-3" class="pr-2" align="start" justify="start">mdi-check-bold</v-icon>
                Titulo
            </v-flex>
            <v-flex class="MyriadPro-LightCond text-2xl pl-8 pb-3">
                lorem ipsum dolor sit amet consectetur adipiscing elit
            </v-flex>
        </div>
        <div class="MyriadPro-Cond text-3xl pb-3">
            <v-icon color="black" class="pr-2">mdi-check-bold</v-icon>
            Titulo sin descripcion
        </div>
    </div>
</template>

<script>
export default {
    name: "CardDocumentacionObligatoria",
}
</script>