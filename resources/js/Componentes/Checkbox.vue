<template>
            <v-row class="px-3">
                <v-col cols="12">
                    <a :href="'/descargar-pdf/' +this.tramite_id" target="_blank">
                        <v-btn outlined color="success" justify="center">
                            <v-flex align="center">
                                <v-icon color="success" class="pr-2">mdi-file-download-outline</v-icon>
                                <div class="MyriadPro-LightCond green--text font-bold text-xl">
                                    DESCARGAR LA DOCUMENTACIÓN OBLIGATORIA
                                </div>
                            </v-flex>
                        </v-btn>
                    </a>
                </v-col>
                <v-col cols="12">
                    <div class="pb-5">
                        <v-form ref="form" v-model="valid" lazy-validation>
                            <v-checkbox v-model="checkbox" :rules="[v => !!v || 'Debes seleccionar para continuar.']"
                                        label="He leído y me he notificado de la documentación necesaria para dicho trámite."
                                        required color="light-green darken-1"/>
                            <v-btn :disabled="!checkbox" color="light-green darken-1" @click="validate">
                                <inertia-link :href="'/formulario'" >
                                    <a class="white--text MyriadPro-Cond text-xl" >Solicitá tu turno</a>
                                </inertia-link>
                            </v-btn>
                        </v-form>
                    </div>
                </v-col>
            </v-row> 
</template>

<script>
export default {
    props: {
        tramite_id: String,
    },

    data () {
        return {
            checkbox: false,
        }
    }
}
</script>