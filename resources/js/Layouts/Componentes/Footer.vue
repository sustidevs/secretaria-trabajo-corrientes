<template>
        <v-footer padless>
            <v-card color="#393b44" flat tile width="100%" height="100%" class="py-4">
                <v-row>
                    <v-col justify="center" align="center">
                        <img class="pt-3" width="220" height="180" :src = "'/images/logoSusti.svg'" alt="">
                    </v-col>
                    <v-col justify="center" align="center">
                        <img  width="250" height="250"  :src = "'/images/corrientes.svg'" alt="">
                    </v-col>
                </v-row>
            </v-card>
        </v-footer>
</template>

<script>
export default {
    name: "Footer"
}
</script>
