<template>
  <v-text-field
      class="MyriadPro-Cond text-justify"
      color="light-green darken-1"
      v-model="inputVal"
      outlined
      :type="tipo"
      :prepend-inner-icon="icon"
  ></v-text-field>
</template>

<script>
export default {
  props: ['value', 'tipo', 'icon'],
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

<style>
.v-application .primary--text {
    color: #9CCC65 !important;
}

.v-application .green.darken-4 {
    background-color: #9CCC65 !important;
    border-color: #9CCC65 !important;
    height:40px;
    width: 40px;
}

.v-text-field fieldset, .v-text-field .v-input__control {
    color: #9CCC65 !important;
}

[type='text']:focus, [type='email']:focus, [type='url']:focus, [type='password']:focus, [type='number']:focus, [type='date']:focus, [type='datetime-local']:focus, [type='month']:focus, [type='search']:focus, [type='tel']:focus, [type='time']:focus, [type='week']:focus, [multiple]:focus, textarea:focus, select:focus {
    outline: 2px solid transparent;
    outline-offset: 2px;
    --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: #4caf5000;
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
    border-color: #9CCC65;
    font-size: 22px !important;
}
</style>
