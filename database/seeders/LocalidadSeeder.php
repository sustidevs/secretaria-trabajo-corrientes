<?php

namespace Database\Seeders;

use App\Models\Localidad;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalidadSeeder extends Seeder
{

    private $arrayLocalidades = [
        'Bella Vista',
        'Berón de Astrada',
        'Capital',
        'Concepción',
        'Curuzú Cuatiá',
        'Empedrado',
        'Esquina',
        'General Alvear',
        'General Paz',
        'Goya',
        'Itatí',
        'Ituzaingó',
        'Lavalle',
        'Mburucuyá',
        'Mercedes',
        'Monte Caseros',
        'Paso de los Libres',
        'Saladas',
        'San Cosme',
        'San Luis del Palmar',
        'San Martín',
        'San Miguel',
        'San Roque',
        'Santo Tomé',
        'Sauce',
        'Todas'		//último sin coma
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('localidades')->delete();
        foreach ($this->arrayLocalidades as $localidad)
        {
            $l = new Localidad();
            $l->nombre = $localidad;
            $l->save();
        }
    }
}
