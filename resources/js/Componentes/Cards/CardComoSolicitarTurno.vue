<template>
    <div>
        <div class="flex MyriadProBlackCond grey--text text--darken-3 text-3xl py-2 rounded-tl-lg">
            ¿Cómo puedo solicitar un turno?
        </div>
        <v-row justify="space-between" align="center" class="pt-3 mb-7">
            <v-col cols="12" xl="4" lg="4" md="12" sm="12" xs="12" justify="center">
                <v-card class="text-2xl grey lighten-2 rounded-lg">
                    <v-row>
                        <v-col align="center" cols="12" xl="1" lg="1" md="1" sm="1" class="mr-2">
                            <div class="MyriadProBlackCond text-3xl px-4 m-2"> 1 </div>
                        </v-col>
                        <v-col align="center" cols="12" xl="10" lg="10" md="10" sm="10">
                            <div class="MyriadPro-LightCond justify-center m-2"> Lea atentamente la documentación obligatoria debajo. </div>
                        </v-col>
                    </v-row>
                </v-card>
            </v-col>
            <v-col cols="12" xl="4" lg="4" md="12" sm="12" xs="12" justify="center">
                <v-card class="text-2xl grey lighten-2 rounded-lg">
                    <v-row>
                        <v-col align="center" cols="12" xl="1" lg="1" md="1" sm="1" class="mr-2">
                            <div class="MyriadProBlackCond text-3xl px-4 m-2"> 2 </div>
                        </v-col>
                        <v-col align="center" cols="12" xl="10" lg="10" md="10" sm="10">
                            <div class="MyriadPro-LightCond justify-center m-2"> He leído y me he notificado de la documentación... </div>
                        </v-col>
                    </v-row>
                </v-card>
            </v-col>
            <v-col cols="12" xl="4" lg="4" md="12" sm="12" xs="12" justify="center">
                <v-card class="text-2xl grey lighten-2 rounded-lg">
                    <v-row>
                        <v-col align="center" cols="12" xl="1" lg="1" md="1" sm="1" class="mr-2">
                            <div class="MyriadProBlackCond text-3xl px-4 m-2"> 3 </div>
                        </v-col>
                        <v-col align="center" cols="12" xl="10" lg="10" md="10" sm="10">
                            <div class="MyriadPro-LightCond justify-center m-2"> Complete los datos, y elija fecha y hora disponible del turno. </div>
                        </v-col>
                    </v-row>
                </v-card>
            </v-col>
        </v-row>
    </div>
</template>

<script>
export default {
    name: "CardComoSolicitarTurno",
}
</script>