<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'persona_id' => '1',
            'oficina_id' => '0',
            'email'      => 'jmagistrali@gmail.com',
        ]);

        User::create([
            'persona_id' => '2',
            'oficina_id' => '0',
            'email'      => 'lefbcast@gmail.com',
        ]);
        
        User::create([
            'persona_id' => '3',
            'oficina_id' => '0',
            'email'      => 'gastondelgrosso73@hotmail.com',
        ]);

        User::create([
            'persona_id' => '4',
            'oficina_id' => '0',
            'email'      => 'perlaesantajuliana@live.com.ar',
        ]);

        User::create([
            'persona_id' => '5',
            'oficina_id' => '0',
            'email'      => 'carlossand@live.com.ar',
        ]);

        User::create([
            'persona_id' => '6',
            'oficina_id' => '0',
            'email'      => 'sdt.delcc@gmail.com',
        ]);

        User::create([
            'persona_id' => '7',
            'oficina_id' => '0',
            'email'      => 'ramirezja@gmail.com',
        ]);

        User::create([
            'persona_id' => '8',
            'oficina_id' => '0',
            'email'      => 'delegacionmcaseros@gmail.com',
        ]);

        User::create([
            'persona_id' => '9',
            'oficina_id' => '0',
            'email'      => 'sdt.delegacionplibres@gmail.com',
        ]);

        User::create([
            'persona_id' => '10',
            'oficina_id' => '0',
            'email'      => 'ajmlopez01@gmail.com',
        ]);
        
        User::create([
            'persona_id' => '11',
            'oficina_id' => '0',
            'email'      => 'susanamarkaevicz12@outlook.com',
        ]);

        User::create([
            'persona_id' => '12',
            'oficina_id' => '0',
            'email'      => 'delegaciontrabajogdorvirasoro@gmail.com',
        ]);

        User::factory()->count(80)->create(['password' => Hash::make('password')]);
    }
}
