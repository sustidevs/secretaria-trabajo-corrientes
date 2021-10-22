<?php

namespace Database\Seeders;

use App\Models\TiposTramite;
use Illuminate\Database\Seeder;

class TiposTramiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TiposTramite::create(
    	    ['descripcion' => 'Asesoramiento Jurídico Gratuito']);

        TiposTramite::create(
            ['descripcion' => 'Formulación de Reclamos']);

        TiposTramite::create(
            ['descripcion' => 'Mesa de Entradas']);

        TiposTramite::create(
            ['descripcion' => 'Ratificación']);

        TiposTramite::create(
            ['descripcion' => 'Consignación - Presentación de Documentación']);

        TiposTramite::create(
            ['descripcion' => 'Consignación - Retiro de Documentación']);

        TiposTramite::create(
            ['descripcion' => 'Rúbrica']);
    }
}
