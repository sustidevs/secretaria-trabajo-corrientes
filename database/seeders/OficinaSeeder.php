<?php

namespace Database\Seeders;

use App\Models\Oficina;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class OficinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Oficina::factory()->count(11)->state(new Sequence(
            ['delegacion_id' => '1'],
            ['delegacion_id' => '2'],
            ['delegacion_id' => '3'],
            ['delegacion_id' => '4'],
            ['delegacion_id' => '5'],
            ['delegacion_id' => '6'],
            ['delegacion_id' => '7'],
            ['delegacion_id' => '8'],
            ['delegacion_id' => '9'],
            ['delegacion_id' => '10'],
            ['delegacion_id' => '11'],
            
        ))->create(['tipos_tramite_id' => '1']);

		Oficina::factory()->count(11)->state(new Sequence(
            ['delegacion_id' => '1'],
            ['delegacion_id' => '2'],
            ['delegacion_id' => '3'],
            ['delegacion_id' => '4'],
            ['delegacion_id' => '5'],
            ['delegacion_id' => '6'],
            ['delegacion_id' => '7'],
            ['delegacion_id' => '8'],
            ['delegacion_id' => '9'],
            ['delegacion_id' => '10'],
            ['delegacion_id' => '11'],
            
        ))->create(['tipos_tramite_id' => '2']);

		Oficina::factory()->count(11)->state(new Sequence(
            ['delegacion_id' => '1'],
            ['delegacion_id' => '2'],
            ['delegacion_id' => '3'],
            ['delegacion_id' => '4'],
            ['delegacion_id' => '5'],
            ['delegacion_id' => '6'],
            ['delegacion_id' => '7'],
            ['delegacion_id' => '8'],
            ['delegacion_id' => '9'],
            ['delegacion_id' => '10'],
            ['delegacion_id' => '11'],
            
        ))->create(['tipos_tramite_id' => '3']);

		Oficina::factory()->count(11)->state(new Sequence(
            ['delegacion_id' => '1'],
            ['delegacion_id' => '2'],
            ['delegacion_id' => '3'],
            ['delegacion_id' => '4'],
            ['delegacion_id' => '5'],
            ['delegacion_id' => '6'],
            ['delegacion_id' => '7'],
            ['delegacion_id' => '8'],
            ['delegacion_id' => '9'],
            ['delegacion_id' => '10'],
            ['delegacion_id' => '11'],
        ))->create(['tipos_tramite_id' => '4']);

		Oficina::factory()->count(11)->state(new Sequence(
            ['delegacion_id' => '1'],
            ['delegacion_id' => '2'],
            ['delegacion_id' => '3'],
            ['delegacion_id' => '4'],
            ['delegacion_id' => '5'],
            ['delegacion_id' => '6'],
            ['delegacion_id' => '7'],
            ['delegacion_id' => '8'],
            ['delegacion_id' => '9'],
            ['delegacion_id' => '10'],
            ['delegacion_id' => '11'],
            
        ))->create(['tipos_tramite_id' => '5']);

		Oficina::factory()->count(11)->state(new Sequence(
            ['delegacion_id' => '1'],
            ['delegacion_id' => '2'],
            ['delegacion_id' => '3'],
            ['delegacion_id' => '4'],
            ['delegacion_id' => '5'],
            ['delegacion_id' => '6'],
            ['delegacion_id' => '7'],
            ['delegacion_id' => '8'],
            ['delegacion_id' => '9'],
            ['delegacion_id' => '10'],
            ['delegacion_id' => '11'],
            
        ))->create(['tipos_tramite_id' => '6']);

		Oficina::factory()->count(11)->state(new Sequence(
            ['delegacion_id' => '1'],
            ['delegacion_id' => '2'],
            ['delegacion_id' => '3'],
            ['delegacion_id' => '4'],
            ['delegacion_id' => '5'],
            ['delegacion_id' => '6'],
            ['delegacion_id' => '7'],
            ['delegacion_id' => '8'],
            ['delegacion_id' => '9'],
            ['delegacion_id' => '10'],
            ['delegacion_id' => '11'],
            
        ))->create(['tipos_tramite_id' => '7']);
    }
}
