
<template>
    <v-simple-table >
        <template v-slot:default>
            <thead>
            <tr class="light-green lighten-1">
                <th class="text-left MyriadPro-Cond tamTabla">
                    Delegacion
                </th>
                <th class="text-left MyriadPro-Cond tamTabla">
                    Direccion
                </th>
                <th class="text-left MyriadPro-Cond tamTabla">
                    Telefono
                </th>
                <th class="text-left MyriadPro-Cond tamTabla">
                    Correo
                </th>
            </tr>
            </thead>

            <tbody>
                <tr class="MyriadPro-LightCond" v-for="item in items" :key="item.name">
                    <td class="descTabla">{{ item.delegacion }}</td>
                    <td class="descTabla">{{ item.direccion }}</td>
                    <td class="descTabla">{{ item.telefono }}</td>
                    <td class="descTabla">{{ item.correo }}</td>
                </tr>
            </tbody>
        </template>
    </v-simple-table>
</template>

<script>
export default {
    data () {
        return {
            items: [
                {
                    delegacion: 'Corrientes',
                    direccion: 'Belgrano 1317',
                    telefono: '(3794) 4433191',
                    correo: 'trabajo_capital@corrientes.gob.ar',
                },
                {
                    delegacion: 'Bella Vista',
                    direccion: 'Santa Fe 782',
                    telefono: '(3795) 045902',
                    correo: 'trabajo_bellavista@corrientes.gob.ar',
                },
                {
                    delegacion: 'Curuzú Cuatiá',
                    direccion: 'Rivadavia 836',
                    telefono: '(3795) 045906',
                    correo: 'trabajo_curuzucuatia@corrientes.gob.ar',
                },
                {
                    delegacion: 'Esquina',
                    direccion: 'General Velazco 1435',
                    telefono: '(3795) 045917',
                    correo: 'trabajo_esquina@corrientes.gob.ar',
                },
                {
                    delegacion: 'Gobernador Virasoro',
                    direccion: 'Remedios de Escalada 943',
                    telefono: '(3795) 045913',
                    correo: 'trabajo_gobvirasoro@corrientes.gob.ar',
                },
                {
                    delegacion: 'Goya',
                    direccion: 'Los Primeros Concejales 256 (Oficinas 6 y 7)',
                    telefono: '(3795) 045905',
                    correo: 'trabajo_goya@corrientes.gob.ar',
                },
                {
                    delegacion: 'Ituizango',
                    direccion: 'Barrio Los Constituyentes calle P casa Nº 50',
                    telefono: '(3795) 045908',
                    correo: 'trabajo_ituizango@corrientes.gob.ar',
                },
                {
                    delegacion: 'Mercedes',
                    direccion: 'Juan Pujol 759',
                    telefono: '(3795) 045903',
                    correo: 'trabajo_mercedes@corrientes.gob.ar',
                },

                {
                    delegacion: 'Monte Caseros',
                    direccion: 'Colón 1271 local 1',
                    telefono: '(3795) 045910',
                    correo: 'trabajo_montecaseros@corrientes.gob.ar',
                },
                {
                    delegacion: 'Paso de los Libres',
                    direccion: 'Coronel López 816 Planta Baja',
                    telefono: '(3795) 045912',
                    correo: 'trabajo_pasodeloslibres@corrientes.gob.ar',
                },
                {
                    delegacion: 'Santo Tome',
                    direccion: 'Irigoyen 876',
                    telefono: '(3795) 045911',
                    correo: 'trabajo_santotome@corrientes.gob.ar',
                },
            ],

        }
    },
}
</script>

<style>
.tamTabla{
    font-size: 25px !important;
}

.descTabla{
   font-size: 20px !important;
}

.theme--light.v-data-table
tbody
tr:hover:not(.v-data-table__expanded__content) {
    background: #fff;
}

</style>
