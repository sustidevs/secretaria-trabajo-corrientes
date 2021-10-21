<template>
    <div class="MyriadPro-Cond">
        <v-btn color="light-green darken-1 white--text" large rounded :width="ancho" :href="link" :target="target">
            <a class="white--text text-xl" >{{texto}}</a>
        </v-btn>
    </div>
</template>

<script>
export default {
    name: "Boton",
    props: {
        texto: String,
        ancho: String,
        link: String,
        target: null,
    }
}
</script>
