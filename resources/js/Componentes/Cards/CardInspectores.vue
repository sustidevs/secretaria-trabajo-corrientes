<template>
    <v-card elevation="1" outlined width="100%" height="100%" class="pa-4 rounded-xl grey lighten-4">
        <v-row>
            <v-col align="center" cols="12">
                <v-img :src="img" width="250px" height="252px"/>
            </v-col>
            <v-col align="center" cols="12">
                <div class="MyriadPro-Cond text-4xl justify-center light-green--text text--darken-1" v-text="title"/>
                <div class="MyriadPro-LightCond text-2xl justify-center" v-text="description"/>
            </v-col>
        </v-row>
    </v-card>
</template>

<script>
export default {
    name: "CardInspectores",

    props: {
        title: String,
        description: String,
        img: String,
    },
}
</script>