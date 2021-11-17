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
            TiposTramiteSeeder::class,
            PermissionSeeder::class,
            FeriadoSeeder::class,
            LocalidadSeeder::class,
            DiaSeeder::class,
            DelegacionSeeder::class,
            OficinaSeeder::class,
            HorariosAtencionSeeder::class,
            RequisitoSeeder::class,
            PersonaSeeder::class,
            UserSeeder::class,
            DelegadoSeeder::class
        ]);
    }
}
