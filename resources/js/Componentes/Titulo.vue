<template>
    <div>
        <div v-if="$vuetify.breakpoint.mdOnly || $vuetify.breakpoint.lgOnly || $vuetify.breakpoint.xlOnly">
            <div class="MyriadPro-Cond siz text-justify green--text text--darken-4">
                {{ texto }}
            </div>
        </div>

        <div v-if="$vuetify.breakpoint.smOnly || $vuetify.breakpoint.xsOnly">
            <div class="MyriadPro-Cond sizMobile text-center green--text text--darken-4">
                {{ texto }}
            </div>
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

.sizMobile{
    font-size: 38px !important;
}
</style>
