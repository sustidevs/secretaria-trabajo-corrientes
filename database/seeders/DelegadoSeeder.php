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
        Delegado::create([
            'user_id' => '10',
            'delegacion_id' => '3795045905',
        ]);
    }
}
