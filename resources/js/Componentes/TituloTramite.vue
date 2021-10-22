<template>
    <div>
        <div class="MyriadProBlackCond siz text-justify grey--text text--darken-3">
            {{ texto }}
        </div>
        <v-divider></v-divider>
    </div>

</template>

<script>
export default {
    name: "TituloTramite",
    props: {
        texto: String
    }
}
</script>

<style>
.siz{
    font-size: 38px !important;
}
</style>
