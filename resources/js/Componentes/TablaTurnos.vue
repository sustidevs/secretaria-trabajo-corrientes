<template>
    <v-data-table
        class="font elevation-5 grey lighten-4 elevation-1 mytable"
        :headers="headers" :items="desserts" sort-by="calories">
        <template v-slot:item.actions="{ item }">
            <v-btn elevation="0" small class="mr-2 my-2 py-5" align="center" @click="this.asistencia(1)">
                <v-icon large file color="grey darken-1" medium align="center">mdi-check</v-icon>
            </v-btn>
            <v-btn elevation="0" small class="my-2 py-5" align="center" @click="this.asistencia(2)">
                <v-icon large color="grey darken-1" medium align="center">mdi-close</v-icon>
            </v-btn>
        </template>
    </v-data-table>
</template>

<script>
export default {

    props: {
        headers: Array
    },

    data: () => ({
        desserts: [],
    }),

    created () {
        this.initialize()
    },

    methods: {
        initialize () {
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
        },

        asistencia (item) {
            this.$inertia.post('/turnos', item)
        },

        deleteItem (item) {
            this.editedIndex = this.desserts.indexOf(item)
            this.editedItem = Object.assign({}, item)
            this.dialogDelete = true
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
