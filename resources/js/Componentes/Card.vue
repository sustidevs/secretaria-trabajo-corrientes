<template>
    <v-card elevation="6" outlined width="100%" height="100%" class="pa-4 grey lighten-4 rounded-xl">
        <v-row>
            <v-col align="center" cols="12">
                <v-img :src="img" width="200px" height="200px"/>
            </v-col>
            <v-col align="center" cols="12">
                <div class="MyriadPro-Cond text-4xl justify-center grey--text text--darken-3" v-text="title"/>
                <div class="MyriadPro-LightCond text-2xl justify-center" v-text="description"/>
            </v-col>
        </v-row>
    </v-card>
</template>

<script>
export default {
    name: "CardTramite",
    props: {
        title: String,
        description: String,
        img: String,
        link:String,
    },
}
</script>
