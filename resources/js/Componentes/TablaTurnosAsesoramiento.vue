<template>
    <div>
        
        <v-data-table
            class="font elevation-5 grey lighten-4 elevation-1 mytable"
            :headers="headers" :items="desserts" sort-by="calories">
            <template v-slot:item.actions="{ item }">
                <v-btn elevation="0" small class="mr-2 my-2 pa-5" align="center" @click="asignar(item)">
                    <v-icon color="grey darken-1" medium align="center">mdi-account-arrow-right</v-icon>
                </v-btn>
            </template>
        </v-data-table> </div>
</template>

<script>

export default {


    data: () => ({
        show: false,
        name_soli: "pepe",
            headers: [
                { text: 'TURNO', align: 'start', value: 'orden_turno', class:'green darken-2 white--text'},
                { text: 'HORA', align: 'start', value: 'hora', class:'green darken-2 white--text'},
                 { text: 'DNI', align: 'start', value: 'dni', class:'green darken-2 white--text'},
                { text: 'SOLICITANTE', value: 'nombre_dni_solicitante', class:'green darken-2 white--text' },
                { text: 'ESTADO', align: 'start', value: 'estado_nombre', class:'green darken-2 white--text' },
                { text: 'ASIGNAR', align: 'center', value: 'actions', sortable: false, class:'green darken-2 white--text' },
            ],
        desserts: [],
    }),

    created () {
        this.initialize()
    },

    methods: {
        initialize () {
            this.desserts = [
                {
                    orden_turno: '1',
                    hora: 159,
                    dni: 41842294,
                    nombre_dni_solicitante: 6.0,
                    estado_nombre: 24,
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
        },

        asignar (item) {
            this.$inertia.get('/asignar', item)
        },
    },
}
</script>

<style>
.v-data-table > .v-data-table__wrapper > table > thead > tr > th > span {
    color: white;
    font-size: 24px !important;
}

.mytable thead {
    background-color: #558B2F !important;
    font-family: "MyriadPro-Cond",serif !important;
}

.v-data-table > .v-data-table__wrapper > table > tbody > tr > td {
    font-family: "MyriadPro-LightCond",serif !important;
    font-size: 22px !important;
}

.v-data-table > .v-data-table__wrapper > table > tbody > tr:hover{
    background-color: #E8F5E9 !important;
}
</style>
