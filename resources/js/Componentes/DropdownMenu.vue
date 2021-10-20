<template>
        <v-menu rounded="b-xl" offset-y>
            <template v-slot:activator="{ attrs, on }">
                <v-hover v-slot="{ hover }" >
                    <v-btn v-ripple="false"
                           color="transparent"
                           elevation="0"
                           file
                           :class="hover ? 'green--text text--darken-1' : 'white--text'"
                           class="pa-8 MyriadPro-Cond size"
                           v-bind="attrs"
                           v-on="on">
                        {{ titulo }}
                    </v-btn>
                </v-hover>
            </template>

            <v-list  color="#393b44">
                <v-list-item
                    v-for="item in dataItem"
                    :key="item.titulo"
                    :href="item.link"
                    class="px-8"

                >
                    <v-hover v-slot="{ hover }" >
                        <v-list-item-title :class="hover ? 'green--text text--darken-1' : 'white--text'" class="size MyriadPro-Cond ">
                            {{ item.titulo}}
                        </v-list-item-title>
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
.size{
    font-size: 17px !important
}

.v-btn::before {
    background-color: transparent;
}
</style>
