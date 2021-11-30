<template>
<div>
    <v-alert
    v-model="show"
    border="left"
      close-text="Close Alert"
      type="success"
    class="MyriadPro-Cond white--text alertSize"
     dismissible
>
Se marco la asistencia del solicitante adasd y su abogado asjdfad con exito
</v-alert>

        
</div>

</template>

<script>

export default{
    props: {
        show: { type: Boolean, default: false}
        }
}
</script>


<style>
.alertSize {
    font-size: 25px;
}
</style>