<template>
    <div>
        <div class="MyriadPro-Cond siz text-justify green--text text--darken-4">
            {{ texto }}
        </div>
        <v-divider></v-divider>
    </div>

</template>

<script>
export default {
    name: "Titulo",
    props: {
        texto: String
    }
}
</script>

<style>
.siz{
    font-size: 50px !important;
}
</style>
