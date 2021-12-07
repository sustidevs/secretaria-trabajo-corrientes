<template>
<div>
    <v-carousel cycle
    height="500"
    hide-delimiter-background
    show-arrows-on-hover>
      <v-carousel-item
        v-for="slide in slides"
        :key="slide.id"
      >
        
          <v-sheet
        height="100%"
      >
        <v-row
          class="fill-height"
          align="center"
          justify="center"
        >
          <div>
            <v-img :src="slide.img" :href="slide.scr"/>
          </div>
        </v-row>
      </v-sheet>
      </v-carousel-item>
    </v-carousel>
</div>

</template>

<script>
  export default {
    data () {
      return {
        model: 0,
        slides: [
            { img:'./images/pago-de-multas.png', scr: '/tasas' },
            { img:'./images/trabajo-de-corrientes.png', scr: '/app-trabajo'},
        ],
      }
    },
  }
</script>
