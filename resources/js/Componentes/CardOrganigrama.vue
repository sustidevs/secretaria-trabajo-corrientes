<template>
    <v-card  elevation="2" color="light-green lighten-1 px-4 mx-4" >
        <v-row no-gutters justify="center">
            <div class="MyriadPro-Cond size-org grey--text text--darken-3">
                {{ texto }}
            </div>
        </v-row>
    </v-card>
</template>

<script>

export default {
    props: {
        width: String,
        texto: String
    }
}

</script>

<style>
.size-org{
    font-size: 30px;
}
</style>
