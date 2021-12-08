<template>
    <v-menu rounded="lg" offset-y>
        <template v-slot:activator="{ attrs, on }">
            <v-hover v-slot="{ hover }" >
                <v-btn
                        v-ripple="false"
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
    </v-menu>
</template>


<script>
export default {
    props: {
        titulo: String,
    },
}
</script>

<style scoped>
.v-btn::before {
    background-color: transparent;
}

</style>
