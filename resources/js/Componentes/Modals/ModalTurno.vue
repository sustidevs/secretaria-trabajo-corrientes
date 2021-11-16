<template>
    <v-dialog v-model="dialog" persistent width="600">
        <v-card class="pa-4" width="600" hover elevation="12" rounded="xl">
            <v-row justify="center" align="center">
                <v-col cols="12">
                    <v-flex>
                        <v-icon color="light-green darken-1" large> mdi-check-circle </v-icon>
                        <div class="MyriadPro-Cond font-bold just text-4xl justify-center ml-2">
                            ¡Ha solicitado el turno con éxito!
                        </div>
                    </v-flex>
                </v-col>
                <v-col cols="12">
                    <v-flex>
                        <v-flex>
                            <v-icon color="light-green darken-1" large>mdi-calendar-check</v-icon>
                            <v-flex>
                                <div class="MyriadPro-Cond font-bold text-3xl ml-2">Fecha: </div>
                                <div class="MyriadPro-Cond text-3xl ml-2" > 28/07/2021 </div>
                            </v-flex>
                        </v-flex>

                        <v-flex>
                            <v-icon color="light-green darken-1" large >mdi-clock-time-nine-outline</v-icon>
                            <v-flex>
                                <div class="MyriadPro-Cond font-bold text-3xl ml-2 ">Hora: </div>
                                <div class="MyriadPro-Cond  text-3xl ml-2 "> 08:00 </div>
                            </v-flex>
                        </v-flex>
                    </v-flex>
                </v-col>
                <v-divider inset></v-divider>
                <v-col cols="12">
                    <v-flex>
                        <v-icon color="light-green darken-1" large>
                            mdi-map-marker
                        </v-icon>

                        <v-flex>
                            <div class="MyriadPro-Cond font-bold text-2xl ml-2">Ubicación: </div>
                            <div class="MyriadPro-Cond text-2xl ml-2"> San Juan 1317, Capital</div>
                        </v-flex>
                    </v-flex>
                </v-col>
                <v-divider inset></v-divider>
                <v-col cols="12">
                    <v-flex>
                        <v-icon color="light-green darken-1" large>mdi-account</v-icon>
                        <div class="MyriadPro-Cond font-bold text-3xl ml-2"> Datos del reclamante:</div>
                    </v-flex>
                    <v-flex>
                        <div class="MyriadPro-Cond font-bold text-2xl ml-12">Nombre y apellido: </div>
                        <div class="MyriadPro-Cond text-2xl ml-2"> Ana María Giménez </div>
                    </v-flex>
                    <v-flex>
                        <div class="MyriadPro-Cond font-bold text-2xl ml-12">DNI: </div>
                        <div class="MyriadPro-Cond text-2xl ml-2"> 35456897 </div>
                    </v-flex>
                    <v-flex class="MyriadPro-Cond font-bold text-2xl mb-2 ml-12 ">
                        Usted posee/no posee abogado.
                    </v-flex>
                </v-col>
                <v-col cols="12" >
                    <v-divider inset></v-divider>
                    <v-flex>
                        <v-icon color="light-green darken-1" large>
                            mdi-account
                        </v-icon>
                        <div class="MyriadPro-Cond font-bold text-3xl ml-2 "> Datos del abogado: </div>
                    </v-flex>

                    <v-flex>
                        <div class="MyriadPro-Cond font-bold text-2xl ml-12">Nombre y apellido: </div>
                        <div class="MyriadPro-Cond text-2xl ml-2"> Martín Cardozo </div>
                    </v-flex>
                    <v-flex>
                        <div class="MyriadPro-Cond font-bold text-2xl ml-12">DNI: </div>
                        <div class="MyriadPro-Cond text-2xl ml-2"> 28564123 </div>
                    </v-flex>
                </v-col>
                <v-card-actions>
                    <v-flex class="justify-center">
                        <v-btn class="ma-2 MyriadPro-Cond text-xl" color="light-green lighten-5">Aceptar
                            <v-icon dark right medium color="light-green darken-1">mdi-check-circle</v-icon>
                        </v-btn>
                        <v-btn class="ma-2 MyriadPro-Cond text-xl" color="light-green darken-1" dark>
                            Descargar
                            <v-icon dark right medium color="white">mdi-file-download</v-icon>
                        </v-btn>
                    </v-flex>
                </v-card-actions>
            </v-row>
        </v-card>
    </v-dialog>
</template>

<script>

export default {
    name: 'ModalTurno',

    props: {
        dialog: Boolean,
    },

    data () {
        return {
            dialog: false,
        }
    },
}
</script>