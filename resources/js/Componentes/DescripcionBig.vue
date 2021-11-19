<template>
    <div class="MyriadPro-Cond text-justify text-4xl pt-3">
        {{texto}}
    </div>
</template>

<script>
export default {
    name: "Descripcion",
    props: {
        texto: String,

    }
}
</script>
<style>
@media (max-width: 480px) {
    .MyriadPro-Cond {
        font-size: 28px;
    }
}
</style>
