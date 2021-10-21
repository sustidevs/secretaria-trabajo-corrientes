<template>
    <layout-no-registrado>
        <Titulo class="pb-8" texto="DELEGACIONES PROVINCIALES"/>
        <cuadro-delegaciones-areas/>
    </layout-no-registrado>
</template>

<script>
import CuadroDelegacionesAreas from "../Componentes/CuadroDelegacionesAreas"
import Titulo from "../Componentes/Titulo";
import LayoutNoRegistrado from "../Layouts/LayoutNoRegistrado";

export default {
    components: {LayoutNoRegistrado, CuadroDelegacionesAreas, Titulo}
}
</script>
