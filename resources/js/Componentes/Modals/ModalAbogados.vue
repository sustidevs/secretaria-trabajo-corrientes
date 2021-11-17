<template>
    <v-dialog v-model="dialog" width="auto">
        <v-card class="pa-4" width="auto" hover elevation="12" rounded="xl">

            <v-row class="pa-5" justify="center" align="center">
                    <div class="MyriadPro-Cond grey--text text--darken-4 text-4xl ">
                        Listado de Abogados
                    </div>
            </v-row>

            <v-divider inset></v-divider>

            <v-row justify="center" aling-content="center">
                <v-col cols="12" lg="8">
                    <v-data-table
                        class="font elevation-5 grey lighten-4 elevation-1 mytable my-4"
                        :headers="headers" :items="desserts" sort-by="calories">
                        <template v-slot:item.actions="{ item }">
                            <v-btn elevation="0" small class="mr-2 my-2 py-5" align="center"
                                   @click="this.asistencia(1)">
                                <v-icon large file color="grey darken-1" medium align="center">mdi-check</v-icon>
                            </v-btn>
                        </template>
                    </v-data-table>
                </v-col>

                <v-col cols="12" lg="4" align="center" justify="center" class="my-6">
                    <img  max-height="250" width="250" :src="('./images/abogado-search.png')">
                    <div class="MyriadPro-Cond grey--text text--darken-4 text-3xl ">
                        Solicitante: {{ solicitante }}
                    </div>
                    <div class="MyriadPro-Cond grey--text text--darken-4 text-3xl ">
                        Abogado seleccionado: Frozen Ypgurt
                    </div>

                    <v-row no-gutters class="py-6 px-2">
                        <v-col cols="12" lg="6">
                            <v-btn elevation="0" block height="40" color="#558B2F" class="white--text">
                                <div class="MyriadPro-Cond text-xl">Confirmar</div>
                            </v-btn>
                        </v-col>

                        <v-col cols="12" lg="6">
                            <v-btn elevation="0" block height="40" color="light-grey lighten-5" @click="close">
                                <div class="MyriadPro-Cond text-xl">Cancelar</div>
                            </v-btn>
                        </v-col>
                    </v-row>
                </v-col>

            </v-row>
        </v-card>
    </v-dialog>
</template>

<script>

export default {
    name: 'ModalTurno',

    props: {
        dialog: Boolean,
        solicitante: String,
    },

    data: () => ({
        headers: [
            {
                text: 'Dessert (100g serving)',
                align: 'start',
                sortable: false,
                value: 'name',
            },
            {text: 'Calories', value: 'calories'},
            {text: 'Fat (g)', value: 'fat'},
            {text: 'Carbs (g)', value: 'carbs'},
            {text: 'Protein (g)', value: 'protein'},
            {text: 'Asignar', value: 'actions', sortable: false},
        ],
        desserts: [],
    }),

    created() {
        this.initialize()
    },


    methods: {
        close() {
            this.$emit('cerrar')
        },

        initialize() {
            this.desserts = [
                {
                    name: 'Frozen Yogurt',
                    calories: 159,
                    fat: 6.0,
                    carbs: 24,
                    protein: 4.0,
                },
                {
                    name: 'Ice cream sandwich',
                    calories: 237,
                    fat: 9.0,
                    carbs: 37,
                    protein: 4.3,
                },
                {
                    name: 'Eclair',
                    calories: 262,
                    fat: 16.0,
                    carbs: 23,
                    protein: 6.0,
                },
                {
                    name: 'Cupcake',
                    calories: 305,
                    fat: 3.7,
                    carbs: 67,
                    protein: 4.3,
                },
                {
                    name: 'Gingerbread',
                    calories: 356,
                    fat: 16.0,
                    carbs: 49,
                    protein: 3.9,
                },
                {
                    name: 'Jelly bean',
                    calories: 375,
                    fat: 0.0,
                    carbs: 94,
                    protein: 0.0,
                },
                {
                    name: 'Lollipop',
                    calories: 392,
                    fat: 0.2,
                    carbs: 98,
                    protein: 0,
                },
                {
                    name: 'Honeycomb',
                    calories: 408,
                    fat: 3.2,
                    carbs: 87,
                    protein: 6.5,
                },
                {
                    name: 'Donut',
                    calories: 452,
                    fat: 25.0,
                    carbs: 51,
                    protein: 4.9,
                },
                {
                    name: 'KitKat',
                    calories: 518,
                    fat: 26.0,
                    carbs: 65,
                    protein: 7,
                },
            ]
        }
    }
}
</script>

<style>
.CondText {
    font-family: MyriadPro-Cond;
    font-size: 28px !important;
}

.LightText {
    font-family: MyriadPro-LightCond;
    font-size: 28px !important;
}
</style>
