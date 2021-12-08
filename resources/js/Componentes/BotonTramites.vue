<template>
    <div>
        <div v-if="$vuetify.breakpoint.mdOnly || $vuetify.breakpoint.lgOnly || $vuetify.breakpoint.xlOnly">
            <v-hover v-slot="{ hover }" >
                <a :href="link">
                    <v-card :color="hover ? 'light-green darken-1' : 'grey lighten-4'" :class="hover ? 'white--text' : 'grey--text text--darken-3'" class="pa-4" rounded="xl">

                        <v-row justify="center" align="center">
                            <v-col cols="12" lg="5" md="5" sm="4" align-self="center" align-content="center">
                                <v-img :src="img" width="150px" height="150px"/>
                            </v-col>
                            <v-col cols="12" lg="7" md="7" sm="6" align-content="center">
                                <div class="MyriadPro-Cond text-5xl justify-center " v-text="title"/>
                            </v-col>
                        </v-row>
                    </v-card>
                </a>
            </v-hover>
        </div>


        <div v-if="$vuetify.breakpoint.smOnly || $vuetify.breakpoint.xsOnly">
            <v-hover v-slot="{ hover }" >
                <a :href="link">
                    <v-card :color="hover ? 'light-green darken-1' : 'grey lighten-4'" :class="hover ? 'white--text' : 'grey--text text--darken-3'" class="pa-4" rounded="xl">
                        <v-row no-gutters justify="center" align="center">
                            <v-col cols="6">
                                <v-img :src="img" width="120" height="120"/>
                            </v-col>
                            <v-col cols="6">
                                <div class="MyriadPro-Cond sizeCard"> {{ title }}</div>
                            </v-col>
                        </v-row>
                    </v-card>
                </a>
            </v-hover>
        </div>
    </div>
</template>

<script>
export default {
    name: "Card",
    props: {
        title: String,
        description: String,
        img: String,
        link:String,
        textoBoton: String,
    },
}
</script>

<style>
.sizeCard {
    font-size: 35px !important;
    font-style: bold;
}
</style>
