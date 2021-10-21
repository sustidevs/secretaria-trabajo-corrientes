<template>
    <layout-no-registrado>
        <Titulo texto="TRÁMITES"/>
        <Descripcion texto="sdfsdfsdfsd"/>
        <Card/>
    </layout-no-registrado>
</template>

<script>


import LayoutNoRegistrado from "../Layouts/LayoutNoRegistrado";
import Titulo from "../Componentes/Titulo";
import Descripcion from "../Componentes/Descripcion";
import Card from "../Componentes/Card";

export default {
    components: {LayoutNoRegistrado, Titulo, Descripcion,Card}
}
</script>
