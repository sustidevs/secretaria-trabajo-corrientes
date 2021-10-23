<template>
    <div>
        <Titulo class="pb-8" texto="Organigrama"/>

        <v-row justify="center">
            <card-organigrama texto="Secretaria de Trabajo y Empleo" width="320"/>
        </v-row>

        <v-row justify="center">
            <div style="border-left:4px solid gray;height:30px;"></div>
        </v-row>


        <hr style="margin-top:5px;margin-bottom: 6px; border:2px solid gray;" >

        <v-row justify="center" no-gutters>
            <v-col cols="12" lg="3" >
                        <card-organigrama texto="Subsecretaria de Trabajo" width="320"/>
                <div class="d-flex justify-center">
                    <div style="border-left:4px solid gray;height:120px"></div>
                </div>
            </v-col>
            <v-col cols="12" lg="3">
                <card-organigrama texto="Subsecretaria de Empleo" width="320"/>
                <div class="d-flex justify-center">
                    <div  style="border-left:4px solid gray;height:120px"></div>
                </div>
            </v-col>
            <v-col cols="12" lg="3">
                <card-organigrama texto="Direccion de Administracion, Coordinacion y Gestion" width="320"/>
                <div class="d-flex justify-center">
                    <div  style="border-left:4px solid gray;height:80px"></div>
                </div>
            </v-col>
            <v-col cols="12" lg="3">
                <card-organigrama texto="Direccion de Vinculacion Estrategica" width="320"/>
            </v-col>
        </v-row>

        <v-row no-gutters>
            <v-col cols="12" lg="3">
                <card-organigrama texto="Direccion de Trabajo" width="320"/>
                <div class="d-flex justify-center">
                    <div  style="border-left:4px solid gray;height:80px"></div>
                </div>
            </v-col>

            <v-col cols="12" lg="3">
                <card-organigrama texto="Direccion de Empleo" width="320"/>
            </v-col>

            <v-col cols="12" lg="3">
                <div class="d-flex justify-center">
                    <div  style="border-left:4px solid gray;height:130px"></div>
                </div>
            </v-col>

        </v-row>

        <v-row no-gutters>
            <v-col cols="12" lg="3">
                <card-organigrama texto="Subdireccion de Trabajo" width="320"/>
                <div class="d-flex justify-center">
                    <div  style="border-left:4px solid gray;height:80px"></div>
                </div>
            </v-col>

            <v-col cols="12" lg="3">
            </v-col>

            <v-col cols="12" lg="3">
                <div class="d-flex justify-center">
                    <div  style="border-left:4px solid gray;height:130px"></div>
                </div>
            </v-col>

        </v-row>

        <v-row no-gutters>
            <v-col cols="12" lg="3">
                <card-organigrama texto="Departamentos" width="320"/>
                <div class="d-flex justify-center">
                    <div style="border-left:4px solid gray;height:40px"></div>
                </div>
            </v-col>

            <v-col cols="12" lg="3"> </v-col>

            <v-col cols="12" lg="3">
                <card-organigrama texto="Departamentos" width="320"/>
                <div class="d-flex justify-center">
                    <div style="border-left:4px solid gray;height:40px"></div>
                </div>
            </v-col>
        </v-row>

        <v-row no-gutters>
            <v-col cols="12" lg="3">
                <card-organigrama class="mb-2" texto="Dpto. de Reclamos y Conciliaciones" width="320"/>
                <card-organigrama  class="mb-2" texto="Dpto. de Inspeccion y Policia del trabajo" width="320"/>
                <card-organigrama  class="mb-2" texto="Dpto. de Sumario y Multas    " width="320"/>
                <card-organigrama  class="mb-2" texto="Dpto. de Habilitacion, Pagos y Consignaciones de Trabajo" width="320"/>
            </v-col>

            <v-col cols="12" lg="3"> </v-col>

            <v-col cols="12" lg="3">
                <card-organigrama class="mb-2" texto="Dpto. de Gestion Administrativa y Servicios Generales" width="320"/>
                <card-organigrama  class="mb-2" texto="Dpto. de Compras y Suministros" width="320"/>
                <card-organigrama  class="mb-2" texto="Dpto. Contable  y Condicion de Cuentas " width="320"/>
                <card-organigrama  class="mb-2" texto="Dpto. de Tesoreria" width="320"/>
                <card-organigrama  class="mb-2" texto="Dpto. de Recursos Humanos y Liquidaciones" width="320"/>
                <card-organigrama  class="mb-2" texto="Dpto. de Asesoria Legal" width="320"/>
                <card-organigrama  class="mb-2" texto="Dpto. de Despacho, Mesa Receptora y Archivo" width="320"/>
            </v-col>
        </v-row>



    </div>
</template>

<script>
import Titulo from "./Titulo";
import CardOrganigrama from "./CardOrganigrama";

export default {
    components: {CardOrganigrama,Titulo}
}
</script>
