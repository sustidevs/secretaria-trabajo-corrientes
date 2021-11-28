<template>
    <div>
                <v-card elevation="6" outlined width="100%" height="500" class="pa-8 grey lighten-4 rounded-xl">

<v-row  justify="center" align="center">
    
                    <div class="MyriadPro-Cond text-5xl justify-center grey--text text--darken-3">
                    Bolsa de Trabajo UNNE
                </div>

                <v-img class="my-5" src="./images/bolsa-unne.png"/>

                <v-hover v-slot="{ hover }" >
                    <a>
                        <div :class="hover ? 'green--text' : 'black--text'" class="pt-3 MyriadPro-Cond text-3xl" > ¡Ingresá y verificá si hay puestos de trabajo disponibles para sumarte! </div>
                    </a>
                </v-hover>
</v-row>

                    
    </v-card>
    </div>
</template>

<script>
import Card from "../Componentes/Card";
export default {
    name: "CardBolsaTrabajo",
    components: {Card}
}
</script>
