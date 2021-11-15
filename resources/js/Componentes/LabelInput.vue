<template>
  <div class="sizeText MyriadPro-Cond pb-2">
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
  .sizeText{
    font-size: 22px !important;
  }
</style>