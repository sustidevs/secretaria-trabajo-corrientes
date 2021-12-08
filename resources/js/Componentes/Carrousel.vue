<template>
<div>
    <v-carousel cycle
                height="500"
    hide-delimiter-background
    >
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
              <a :href="slide.scr">
                 <div v-if="$vuetify.breakpoint.smOnly">
                     <v-img height="100%" width="700" :src="slide.img" />
                 </div>
                  <div v-if="$vuetify.breakpoint.mdOnly">
                      <v-img height="100%" width="960" :src="slide.img" />
                  </div>
                  <div v-if="$vuetify.breakpoint.lgOnly || $vuetify.breakpoint.xlOnly">
                      <v-img height="100%" width="1000" :src="slide.img" />
                  </div>
              </a>
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
