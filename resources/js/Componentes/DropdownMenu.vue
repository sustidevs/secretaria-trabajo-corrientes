<template>
        <v-menu rounded="b-xl" offset-y>
            <template v-slot:activator="{ attrs, on }">
                <v-hover v-slot="{ hover }" >
                    <v-btn v-ripple="false"
                           color="transparent"
                           elevation="0"
                           file
                           :class="hover ? 'green--text text--darken-1' : 'white--text'"
                           class="pa-5 MyriadPro-Cond"
                           v-bind="attrs"
                           v-on="on">
                        {{ titulo }}
                    </v-btn>
                </v-hover>
            </template>

            <v-list  color="#393b44">
                <v-list-item>
                    <v-hover v-slot="{ hover }" >
                        <a href="/organigrama">
                        <v-list-item-title :class="hover ? 'green--text text--darken-1' : 'white--text'" class="size MyriadPro-Cond ">
                            ORGANIGRAMA
                        </v-list-item-title>
                        </a>
                    </v-hover>
                </v-list-item>

                <v-list-item>
                    <v-hover v-slot="{ hover }" >
                        <a href="/delegaciones">
                            <v-list-item-title  :class="hover ? 'green--text text--darken-1' : 'white--text'" class="size MyriadPro-Cond ">
                                DELEGACIONES
                            </v-list-item-title>
                        </a>
                    </v-hover>
                </v-list-item>
            </v-list>
        </v-menu>
</template>


<script>
export default {
    props: {
        titulo: String,
        dataItem: Array,
    },
}
</script>

<style>

.v-btn::before {
    background-color: transparent;
}
</style>
