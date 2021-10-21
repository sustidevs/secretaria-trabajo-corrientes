<template>
    <layout-no-registrado>
        <Titulo texto="TRÁMITES"/>
        <Descripcion texto="sdfsdfsdfsd"/>
        <cuadro-delegaciones-areas/>
        <Card/>
    </layout-no-registrado>
</template>

<script>


import LayoutNoRegistrado from "../Layouts/LayoutNoRegistrado";
import Titulo from "../Componentes/Titulo";
import Descripcion from "../Componentes/Descripcion";
import Card from "../Componentes/Card";
import CuadroDelegacionesAreas from "../Componentes/CuadroDelegacionesAreas";

export default {
    components: {LayoutNoRegistrado, Titulo, Descripcion,Card,CuadroDelegacionesAreas}
}
</script>
