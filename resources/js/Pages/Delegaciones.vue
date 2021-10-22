<template>
    <layout-no-registrado>
        <Titulo class="pb-8" texto="DELEGACIONES PROVINCIALES"/>
        <mapap/>
        <v-row>
            <v-col cols="12" lg="6">
                <cuadro-delegaciones-areas/>
            </v-col>
            <v-col cols="12" lg="6">
                <mapa/>
            </v-col>
        </v-row>

    </layout-no-registrado>
</template>

<script>
import CuadroDelegacionesAreas from "../Componentes/CuadroDelegacionesAreas"
import Titulo from "../Componentes/Titulo";
import LayoutNoRegistrado from "../Layouts/LayoutNoRegistrado";
import Mapa from "../Componentes/Mapa"
import Mapap from "../Componentes/Mapap"
export default {
    components: {LayoutNoRegistrado, CuadroDelegacionesAreas, Titulo, Mapa, Mapap}
}
</script>
