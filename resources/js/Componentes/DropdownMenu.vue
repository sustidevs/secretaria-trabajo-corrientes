<template>
        <v-menu rounded="lg" offset-y>
            <template v-slot:activator="{ attrs, on }">
                <v-hover v-slot="{ hover }" >
                    <v-btn v-ripple="false"
                           color="transparent"
                           elevation="0"
                           file
                           :class="hover ? 'green--text text--darken-1' : 'black--text'"
                           class="pa-8 MyriadPro-Cond"
                           v-bind="attrs"
                           v-on="on">
                        {{ titulo }}
                    </v-btn>
                </v-hover>
            </template>


            <v-list>
                <v-list-item
                    v-for="item in dataItem"
                    :key="item.titulo"
                    :href="item.link"
                    class="px-8"
                >
                    <v-hover v-slot="{ hover }" >
                        <v-list-item-title :class="hover ? 'green--text text--darken-1' : 'black--text'" class="MyriadPro-LightCond py-3">
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
