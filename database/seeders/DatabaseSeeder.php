<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            FeriadoSeeder::class,
            LocalidadSeeder::class,
            DiaSeeder::class,
            TiposTramiteSeeder::class,
            DelegacionSeeder::class,
            OficinaSeeder::class,
            TiposTramiteSeeder::class,
            HorariosAtencionSeeder::class
        ]);
    }
}
