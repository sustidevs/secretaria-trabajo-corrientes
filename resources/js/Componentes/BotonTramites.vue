<template>
 <v-hover v-slot="{ hover }" >
    <a href="link">
            <v-card :color="hover ? 'light-green darken-1' : 'grey lighten-4'" :class="hover ? 'white--text' : 'grey--text text--darken-3'" class="pa-4" rounded="xl">
              
                <v-row justify="center" align="center">
                    <v-col cols="12" lg="5" align-self="center" align-content="center">
                         <v-img :src="img" width="150px" height="150px"/>
                    </v-col>
                    <v-col cols="12" lg="7" align-content="center">
                        <div class="MyriadPro-Cond text-5xl justify-center " v-text="title"/>
                    </v-col>
                </v-row>
            </v-card>
    </a>
 </v-hover>
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
        link:String,
    },
}
</script>
