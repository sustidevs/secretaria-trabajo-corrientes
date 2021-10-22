<?php

namespace Database\Seeders;

use App\Models\Dia;
use Illuminate\Database\Seeder;

class DiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dia::create([
            'nombre' => 'Lunes', 
        ]);
        Dia::create([
            'nombre' => 'Martes', 
        ]);
        Dia::create([
            'nombre' => 'Miércoles', 
        ]);
        Dia::create([
            'nombre' => 'Jueves', 
        ]);
        Dia::create([
            'nombre' => 'Viernes', 
        ]);
    }
}
