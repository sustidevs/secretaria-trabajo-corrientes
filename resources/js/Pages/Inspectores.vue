<template>
    <LayoutNoRegistrado>
            <Titulo texto="Inspectores"/>
            <descripcion-big texto="Ley 2.477 Art. 2 Inc. B, Art. 11, 12 y 13 - Disposición N°78/18."/>
            <v-row class="mb-5">
                <v-col cols="12" lg="3" md="6" xs="12">
                    <card-inspectores img="./images/Inspectores/alegre-sonia.png" title="Alegre, Sonia Verónica" description="DNI: 27.189.949"/>
                </v-col>
                <v-col cols="12" lg="3" md="6" xs="12">
                    <card-inspectores img="./images/Inspectores/hinneburg-conrado.png" title="Hinneburg Conrado, Federico" description="DNI: 34.825.154"/>
                </v-col>
                <v-col cols="12" lg="3" md="6" xs="12">
                    <card-inspectores img="./images/Inspectores/centurion-lourdes.png" title="Centurión, Lourdes Marianela" description="DNI: 36.112.279"/>
                </v-col>
                <v-col cols="12" lg="3" md="6" xs="12">
                    <card-inspectores img="./images/Inspectores/aranda-carlos.png" title="Aranda, Carlos Javier" description="DNI: 34.825.301"/>
                </v-col>
                <v-col cols="12" lg="3" md="6" xs="12">
                    <card-inspectores img="./images/Inspectores/leiva-graciela.png" title="Leiva, Graciela Noemí" description="DNI: 31.686.678"/>
                </v-col>
                <v-col cols="12" lg="3" md="6" xs="12">
                    <card-inspectores img="./images/Inspectores/gonzalez-matias.png" title="Gonzalez, Matias Alejandro" description="DNI: 38.317.451"/>
                </v-col>
                <v-col cols="12" lg="3" md="6" xs="12">
                    <card-inspectores img="./images/Inspectores/monzon-pinat.png" title="Monzón Pinat, Fernando Javier" description="DNI: 33.357.670"/>
                </v-col>
                <v-col cols="12" lg="3" md="6" xs="12">
                    <card-inspectores img="./images/Inspectores/peloso-miriam.png" title="Peloso, Miriam Estefanía" description="DNI: 38.317.238"/>
                </v-col>
                <v-col cols="12" lg="3" md="6" xs="12">
                    <card-inspectores img="./images/Inspectores/diaz-noelia.png" title="Diaz, Noelia Lucia José" description="DNI: 36.515.097"/>
                </v-col>
                <v-col cols="12" lg="3" md="6" xs="12">
                    <card-inspectores img="./images/Inspectores/godoy-hugo.png" title="Godoy, Hugo Daniel" description="DNI: 22.086.952"/>
                </v-col>
                <v-col cols="12" lg="3" md="6" xs="12">
                    <card-inspectores img="./images/Inspectores/badia-oscar.png" title="Badia, Oscar" description="DNI: 27.900.234"/>
                </v-col>
                <v-col cols="12" lg="3" md="6" xs="12">
                    <card-inspectores img="./images/Inspectores/garcia-santiago.png" title="García, Santiago Bernardo" description="DNI: 31.594.025"/>
                </v-col>
                <v-col cols="12" lg="3" md="6" xs="12">
                    <card-inspectores img="./images/Inspectores/lopez-jesica.png" title="López, Jesica Elizabeth" description="DNI: 34.093.052"/>
                </v-col>
                <v-col cols="12" lg="3" md="6" xs="12">
                    <card-inspectores img="./images/Inspectores/ortiz-romero.png" title="Ortiz Romero, Melina" description="DNI: 36.515.322"/>
                </v-col>
                <v-col cols="12" lg="3" md="6" xs="12">
                    <card-inspectores img="./images/Inspectores/hayes-abel.png" title="Hayes, Abel Andres" description="DNI: 30.950.686"/>
                </v-col>
                <v-col cols="12" lg="3" md="6" xs="12">
                    <card-inspectores img="./images/Inspectores/pruyas-elvira.png" title="Pruyas, Elvira Patricia" description="DNI: 24.033.886"/>
                </v-col>
            </v-row>
    </LayoutNoRegistrado>
</template>

<script>
import LayoutNoRegistrado from "../Layouts/LayoutNoRegistrado"
import CardInspectores from "../Componentes/Cards/CardInspectores"
import TituloTramite from '../Componentes/TituloTramite'
import Descripcion from '../Componentes/Descripcion';
import Titulo from '../Componentes/Titulo';
import DescripcionBig from "../Componentes/DescripcionBig.vue";
export default {
    components: {
        LayoutNoRegistrado,
        CardInspectores,
        TituloTramite,
        Descripcion,
        Titulo,
        DescripcionBig
    },
}
</script>