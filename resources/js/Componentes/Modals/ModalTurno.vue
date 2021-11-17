<template>
    <v-dialog v-model="dialog" persistent width="600">
        <v-card class="pa-4" width="600" hover elevation="12" rounded="xl">
            <v-row justify="center" align="center">
                <v-col cols="12">
                    <v-flex>
                        <div class="CondText justify-center ml-2">
                            ¡HA SOLICITADO EL TURNO CON ÉXITO!
                        </div>
                    </v-flex>
                </v-col>
                <v-col cols="12">
                    <v-flex>
                        <v-flex>
                            <v-icon color="light-green darken-1">mdi-calendar-month</v-icon>
                            <v-flex>
                                <div class="CondText ml-2">Fecha: </div>
                                <div class="LightText ml-2" > 28/07/2021 </div>
                            </v-flex>
                        </v-flex>

                        <v-flex>
                            <v-icon color="light-green darken-1">mdi-clock-time-nine</v-icon>
                            <v-flex>
                                <div class="CondText ml-2">Hora: </div>
                                <div class="LightText ml-2"> 08:00 </div>
                            </v-flex>
                        </v-flex>
                    </v-flex>
                </v-col>
                <v-divider inset></v-divider>
                <v-col cols="12">
                    <v-flex>
                        <v-icon color="light-green darken-1">
                            mdi-map-marker
                        </v-icon>

                        <v-flex>
                            <div class="CondText ml-2">Ubicación: </div>
                            <div class="LightText ml-2"> San Juan 1317, Capital</div>
                        </v-flex>
                    </v-flex>
                </v-col>
                <v-divider inset></v-divider>
                <v-col cols="12">
                    <v-flex>
                        <v-icon color="light-green darken-1">mdi-account</v-icon>
                        <div class="CondText ml-2"> Datos del reclamante:</div>
                    </v-flex>
                    <v-flex>
                        <div class="CondText ml-12">Nombre y apellido: </div>
                        <div class="LightText ml-2"> Ana María Giménez </div>
                    </v-flex>
                    <v-flex>
                        <div class="CondText ml-12">DNI: </div>
                        <div class="LightText ml-2"> 35456897 </div>
                    </v-flex>
                </v-col>
                <!-- v-if SI NO ES ASESORAMIENTO JURÍDICO -->
                <v-divider inset></v-divider>
                <v-col cols="12" >
                    <v-flex>
                        <v-icon color="light-green darken-1">
                            mdi-account
                        </v-icon>
                        <div class="CondText ml-2 "> Datos del abogado: </div>
                    </v-flex>

                    <v-flex>
                        <div class="CondText ml-12">Nombre y apellido: </div>
                        <div class="LightText ml-2"> Martín Cardozo </div>
                    </v-flex>
                    <v-flex>
                        <div class="CondText ml-12">DNI: </div>
                        <div class="LightText ml-2"> 28564123 </div>
                    </v-flex>
                </v-col>
                <v-card-actions>
                    <v-row justify="center" class="py-5">
                        <v-col cols="6">
                            <v-btn elevation="0" block height="40" color="light-grey lighten-5" @click="close()">
                                <div class="MyriadPro-Cond text-xl">Aceptar</div>
                            </v-btn>
                        </v-col>
                        <v-col cols="6">
                            <v-btn color="light-green darken-1" elevation="0" dark block height="40">
                                <div class="MyriadPro-Cond text-xl">Descargar</div>
                                <v-icon dark right medium color="white">mdi-file-download</v-icon>
                            </v-btn>
                        </v-col>
                    </v-row>
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
    methods: {
        close(){
            this.dialog=false;
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