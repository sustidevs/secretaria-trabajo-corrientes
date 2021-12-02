<template>
    <div>
        <v-row>
                <div class="MyriadPro-Cond py-8 pl-4">
                    <v-btn color="#558B2F" block rounded href="/nuevo-abogado">
                        <a class="white--text text-xl" > Añadir Abogado </a>
                    </v-btn>
                </div>
        </v-row>

            <v-data-table
                class="font elevation-5 grey lighten-4 elevation-1 mytable"
                :headers="headers" :items="turnos" sort-by="calories">
                <template v-slot:item.actions="{ item }">
                    <v-btn elevation="0" small class="mr-2 my-2 pa-5" align="center" @click="asignar(item)">
                        <v-icon color="grey darken-1" medium align="center">mdi-account-arrow-right</v-icon>
                    </v-btn>
                </template>
            </v-data-table>
        </div>
</template>

<script>

export default {

    props: {
        turnos: Array,
        tipo_tramite: Number
    },


    data: () => ({
        show: false,
        name_soli: "pepe",
            headers: [
                { text: 'TURNO', align: 'start', value: 'orden_turno', class:'green darken-2 white--text'},
                { text: 'HORA', align: 'start', value: 'hora', class:'green darken-2 white--text'},
                { text: 'SOLICITANTE', value: 'nombre_dni_solicitante', class:'green darken-2 white--text' },
                { text: 'ESTADO', align: 'start', value: 'estado_nombre', class:'green darken-2 white--text' },
                { text: 'ASIGNAR', align: 'center', value: 'actions', sortable: false, class:'green darken-2 white--text' },
            ],
    }),

    methods: {
        asignar (item) {
            this.$inertia.get('/asignar',{turno: item.id} )
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
