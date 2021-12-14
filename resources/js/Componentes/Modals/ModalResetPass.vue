<template>
    <v-dialog v-model="dialog" persistent width="600">
        <v-card class="pa-4" width="600" hover elevation="12" rounded="xl">

            <v-row justify="center" align="center">
                <v-col cols="12">
                    <v-flex>
                        <v-icon
                            color="light-green darken-1"
                            large>
                            mdi-check-circle
                        </v-icon>
                        <div class="MyriadPro-Cond font-bold just text-4xl justify-center ml-2">
                            ¡La contraseña se cambió correctamente!
                        </div>
                    </v-flex>
                </v-col>
                <v-divider inset></v-divider>
                <v-col cols="12">
                    <v-flex>
                        <div class="MyriadPro-Cond text-2xl ml-2"> Debe volver a ingresar. </div>
                    </v-flex>
                </v-col>
                <v-card-actions>
                    <v-flex class="justify-center">
                        <inertia-link :href="'/ingresar'" >
                            <v-btn  class="ma-2 MyriadPro-Cond text-xl" color="light-green lighten-5" >Aceptar
                                <v-icon dark right medium color="light-green darken-1">mdi-check-circle</v-icon>
                            </v-btn>
                        </inertia-link>
                    </v-flex>
                </v-card-actions>
            </v-row>
        </v-card>
    </v-dialog>
</template>

<script>

export default {
    name: 'ModalEdit',

    props: {
        dialog: {type: Boolean, default: false}
    },

    methods: {
        close(){
            Inertia.get('/ingresar')
        },
    }
}
</script>

<style>
.CondText{
    font-family: MyriadPro-Cond;
    font-size: 28px !important;
}
.LightText{
    font-family: MyriadPro-LightCond;
    font-size: 28px !important;
}
</style>
