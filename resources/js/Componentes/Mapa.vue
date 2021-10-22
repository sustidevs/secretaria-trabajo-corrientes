<template>
    <div>
        <v-alert x="15" y="10" v-if="show" dense text type="success">
            <v-row>
                <v-col cols="12" lg="6">
                    <p><strong>Delegacion:</strong> {{ this.title }} </p>
                    <p><strong>Direccion:</strong> {{ this.direccion }} </p>
                </v-col>
                <v-col cols="12" lg="6">
                    <p><strong>Telefono:</strong> {{ this.correo }} </p>
                    <p><strong>Correo:</strong>  {{ this.delegado }}</p>
                </v-col>
            </v-row>
        </v-alert>
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
    /**
     methods: {
    onMapClick: function(attr){
      this.$notify({
        group: 'map',
        title: 'State clicked',
        text: `You clicked on state with id: ${attr.mapId} and title: ${attr.title}`
      });
    }
  }**/
}
</script>

<style>
.capital{
    transform: translate(320%,80%)
}
</style>

