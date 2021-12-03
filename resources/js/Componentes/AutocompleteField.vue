<template>
  <v-autocomplete
      class="MyriadPro-Cond text-justify"
      color="#7CB342"
      outlined
      :items="data"
      item-value="id"
      :item-text="nombre"
      v-model="inputVal"
      single-line
      item-color="light-green darken-1"
      :prepend-inner-icon="icon"
  >
  </v-autocomplete>
</template>

<script>
export default {
  props: {
    data: Array,
    nombre: String,
    icon: String,
  },
  data() {
    return { inputVal: this.value }
  },
  watch: {
    inputVal(val) {
      this.$emit('input', val);
    }
  }
}
</script>
