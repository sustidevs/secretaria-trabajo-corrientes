<?php

namespace Database\Seeders;

use App\Models\Delegado;
use Illuminate\Database\Seeder;

class DelegadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Delegado de capital
        Delegado::create([
            'user_id' => '1',
            'delegacion_id' => '3',
        ]);



    }
}
