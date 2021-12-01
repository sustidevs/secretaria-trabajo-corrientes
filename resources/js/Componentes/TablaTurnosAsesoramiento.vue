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
                    hora: '09:00',
                    dni: 41842294,
                    nombre_dni_solicitante: 'Maria Perez',
                    estado_nombre: 'Pendiente',
                },
                {
                    orden_turno: '2',
                    hora: '09:30',
                    dni: 20842294,
                    nombre_dni_solicitante: 'Juliana Alvarez',
                    estado_nombre: 'Pendiente',
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
