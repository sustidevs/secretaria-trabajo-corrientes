<template>
  <div class="inputText MyriadPro-Cond grey--text text--darken-3">
    {{ texto }}
  </div>
</template>

<script>
export default {
  name: 'LabelInput',
  props: {
    texto: String,
  }
}
</script>

<style>
  .inputText{
    font-size: 22px !important;
  }
</style>