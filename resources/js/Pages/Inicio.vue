<template>
    <layout-no-registrado>
        <div>
            <card-organigrama texto="Secretaria de Trabajo y Empleo" width="320"/>
            <Titulo texto="TRÁMITES"/>
            <card-tramites class="pt-8 pb-16"/>
            <Titulo texto="TÍTULO"/>
            <v-row class="pt-8 pb-16">
                <v-col cols="12" md="6" sm="12" xs="12">
                    <card-bolsa-trabajo/>
                </v-col>
                <v-col cols="12" md="6" sm="12" xs="12">
                    <card-app-trabajo/>
                </v-col>
            </v-row>
        </div>
    </layout-no-registrado>
</template>

<script>
import LayoutNoRegistrado from "../Layouts/LayoutNoRegistrado";
import Titulo from '../Componentes/Titulo';
import CardTramites from '../Inicio/CardTramites';
import CardBolsaTrabajo from '../Inicio/CardBolsaTrabajo';
import CardAppTrabajo from '../Inicio/CardAppTrabajo';
import CardOrganigrama from "../Componentes/CardOrganigrama"


export default {
    name: "Inicio",
    components: {LayoutNoRegistrado, Titulo, CardTramites, CardBolsaTrabajo, CardAppTrabajo,CardOrganigrama}
}
</script>
