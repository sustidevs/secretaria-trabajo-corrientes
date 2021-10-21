<template>
    <div>
        <v-img :width="ancho" :height="alto" :src="img" :lazy-src="imglazy"/>
    </div>
</template>

<script>
export default {
    name: "Imagen",
    props: {
        ancho: String,
        alto: String,
        img: String,
        imglazy: String,
    }
}
</script>
