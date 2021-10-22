<?php

namespace Database\Seeders;

use App\Models\Feriado;
use Illuminate\Database\Seeder;

class FeriadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feriado::create([
            'dia' => '1',
            'mes' => '1',
        ]);

        Feriado::create([
            'dia' => '15',
            'mes' => '2',
        ]);

        Feriado::create([
            'dia' => '16',
            'mes' => '2',
        ]);

        Feriado::create([
            'dia' => '24',
            'mes' => '3',
        ]);

        Feriado::create([
            'dia' => '2',
            'mes' => '4',
        ]);

        Feriado::create([
            'dia' => '1',
            'mes' => '5',
        ]);

        Feriado::create([
            'dia' => '25',
            'mes' => '5',
        ]);

        Feriado::create([
            'dia' => '20',
            'mes' => '6',
        ]);

        Feriado::create([
            'dia' => '9',
            'mes' => '7',
        ]);

        Feriado::create([
            'dia' => '8',
            'mes' => '11',
        ]);

        Feriado::create([
            'dia' => '11',
            'mes' => '11',
        ]);

        Feriado::create([
            'dia' => '12',
            'mes' => '10',
        ]);

        Feriado::create([
            'dia' => '22',
            'mes' => '11',
        ]);

        Feriado::create([
            'dia' => '8',
            'mes' => '12',
        ]);
        
        Feriado::create([
            'dia' => '25',
            'mes' => '12',
        ]);
    }
}
