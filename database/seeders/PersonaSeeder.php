<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Persona::create([
            'dni' => '10111222', //Coordinador
            'nombre' => 'Jorge',
            'apellido' => 'Magistrali',
            'telefono' => '',
            'correo' => 'jmagistrali@example.com',
            'domicilio' => '',
            'localidad_id' => '3',
            'tipo'=>'7',
        ]);

        Persona::create([
            'dni' => '12111222', //Auditor
            'nombre' => 'Fabio',
            'apellido' => 'Castillo',
            'telefono' => '',
            'correo' => 'fcastillo@example.com',
            'domicilio' => '',
            'localidad_id' => '3',
            'tipo'=>'9',
        ]);

        Persona::create([//Coordinador Gral
            'dni' => '13111222', 
            'nombre' => 'Gaston ',
            'apellido' => 'Del Grosso',
            'telefono' => '',
            'correo' => 'delgrossog@example.com',
            'domicilio' => '',
            'localidad_id' => '3',
            'tipo'=>'6',
        ]); 

        Persona::create([//Delegado
            'dni' => '31083287', 
            'nombre' => 'Perla',
            'apellido' => 'Santajuliana',
            'telefono' => '',
            'correo' => 'perlaesantajuliana@live.com.ar',
            'domicilio' => '',
            'localidad_id' => '10',
            'tipo'=>'5',
        ]); 
        Persona::create([//Delegado
            'dni' => '1072300', 
            'nombre' => 'Carlos',
            'apellido' => 'Sand',
            'telefono' => '',
            'correo' => 'carlossand@live.com.ar',
            'domicilio' => '',
            'localidad_id' => '1',
            'tipo'=>'5',
        ]); 
        Persona::create([//Delegado
            'dni' => '18164100', 
            'nombre' => 'Susana',
            'apellido' => 'Irastorza',
            'telefono' => '',
            'correo' => 'sdt.delcc@gmail.com',
            'domicilio' => '',
            'localidad_id' => '5',
            'tipo'=>'5',
        ]);
        Persona::create([//Delegado
            'dni' => '13325115', 
            'nombre' => 'Jose Agustin',
            'apellido' => 'Ramirez',
            'telefono' => '',
            'correo' => 'ramirezja@gmail.com',
            'domicilio' => '',
            'localidad_id' => '15',
            'tipo'=>'5',
        ]);
        Persona::create([//Delegado
            'dni' => '14442546', 
            'nombre' => 'Ruben',
            'apellido' => 'Cardozo',
            'telefono' => '',
            'correo' => 'rubencardozo@gmail.com',
            'domicilio' => '',
            'localidad_id' => '16',
            'tipo'=>'5',
        ]);
        Persona::create([//Delegado
            'dni' => '24195548', 
            'nombre' => 'Raul',
            'apellido' => 'Albuquerque',
            'telefono' => '',
            'correo' => 'rubencardozo@gmail.com',
            'domicilio' => '',
            'localidad_id' => '17',
            'tipo'=>'5',
        ]);
        Persona::create([//Delegado
            'dni' => '21700855', 
            'nombre' => 'Antonio Jose Maria',
            'apellido' => 'Lopez',
            'telefono' => '',
            'correo' => 'ajmlopez01@gmail.com',
            'domicilio' => '',
            'localidad_id' => '12',
            'tipo'=>'5',
        ]);
        Persona::create([//Delegado
            'dni' => '31421157', 
            'nombre' => 'Susana',
            'apellido' => 'Markaevicz',
            'telefono' => '',
            'correo' => 'susanamarkaevicz12@outlook.com',
            'domicilio' => '',
            'localidad_id' => '24',
            'tipo'=>'5',
        ]);
        Persona::create([//Delegado
            'dni' => '18087683', 
            'nombre' => 'Ricardo',
            'apellido' => 'Ramos',
            'telefono' => '',
            'correo' => 'ricardoramos2@outlook.com',
            'domicilio' => '',
            'localidad_id' => '26',
            'tipo'=>'5',
        ]);
    }
}
