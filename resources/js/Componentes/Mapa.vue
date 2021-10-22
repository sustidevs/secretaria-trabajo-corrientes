<template>
    <div>
        <div class="MyriadPro-Cond text-center text-4xl  green--text text--darken-4">
            Haz click sobre las localidades resaltadas para más informacion
        </div>
        <notifications group="map" position="top right">
            <p><strong>Delegacion:</strong> {{ this.title }} </p>
        </notifications>
        <v-chip class="ma-2 ml-16 MyriadPro-Cond chip-size" color="#558B2F" text-color="white">
            Localidades con Delegación
        </v-chip>
        <map-container v-on:map-clicked="onMapClick"/>
    </div>
</template>

<script>
import MapContainer from './MapContainer'
export default {
    name: 'Mapa',
    components: {
        MapContainer
    },
    props: {
        msg: String
    },
    data: () => ({
        show: false,
        title: '',
        direccion: '',
        telefono: '',
        correo: '',
        delegado: '',
    }),
/**
    methods: {
        onMapClick: function(attr){
            this.show = true,
                this.title = attr.title
                    this.direccion = attr.direccion
                        this.telefono = attr.telefono
                            this.correo = attr.correo
                                this.delegado = attr.delegado
        }
    }
 **/
     methods: {
    onMapClick: function(attr){
      this.$notify({
        group: 'map',
        title: `<u>Delegacion</u> : ${attr.title} <br/> <u>Direccion:</u> ${attr.direccion} <br/><u> Telefono:</u> ${attr.telefono} <br/> <u>Delegado:</u> ${attr.delegado} `,
      });
    }
  }
}
</script>

<style>
.vue-notification {
    padding: 10px;
    margin: 230px 60px 10px 10px ;

    font-family: MyriadPro-Cond;
    font-size: 20px;
    rounded: 10px;
    color: #1B5E20;
    background: #DCEDC8;
    border-left: 5px solid #42A85F;
}

.chip-size{
    font-size: 18px !important;
}
</style>

