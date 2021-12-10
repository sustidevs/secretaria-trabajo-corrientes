<template>
            <v-row class="px-3">
                <v-col v-if="posee_requisitos" cols="12">
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
                            <v-checkbox v-if="posee_requisitos" v-model="checkbox" :rules="[v => !!v || 'Debes seleccionar para continuar.']"
                                        label="He leído y me he notificado de la documentación necesaria para dicho trámite."
                                        required color="light-green darken-1"/>
                            <v-btn :disabled="!checkbox && posee_requisitos" color="light-green darken-1" @click="validate">
                                <div v-if="this.tramite_id === 1">
                                   <inertia-link :href="'/solicitar-asesoramiento'" >
                                    <a class="white--text MyriadPro-Cond text-xl" >Solicitá tu turno</a>
                                    </inertia-link>
                                </div>

                                <div v-if="this.tramite_id > 1">
                                   <inertia-link :href="'/solicitar-turno'" >
                                    <a class="white--text MyriadPro-Cond text-xl" >Solicitá tu turno</a>
                                    </inertia-link>
                                </div>

                            </v-btn>
                        </v-form>
                    </div>
                </v-col>
            </v-row>
</template>

<script>
export default {
    props: {
        tramite_id: Number,
        posee_requisitos: Boolean
    },

    data () {
        return {
            checkbox: false,
        }
    },
}
</script>
