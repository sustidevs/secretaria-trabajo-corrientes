<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Persona;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
//use Spatie\Permission\Traits\HasPermissions;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $delegado_capital = User::create([
            'persona_id' => '1',
            'oficina_id' => '3',//TODO referencia a todas por ser delegado
            'email'      => 'jmagistrali@gmail.com',
            'cuil'       => '10111222',
            'password'   => Hash::make('password'),
        ]);
        $delegado_capital->givePermissionTo(['name' => "todos"]);

        //USUARIOS DELEGACION CAPITAL
        $persona = Persona::create([
            'dni' => '12437491', 
            'nombre' => 'NORMA BEATRIZ',
            'apellido' => 'JARA PISARELLO',
            'telefono' => '',
            'correo' => '',
            'domicilio' => '',
            'localidad_id' => '3',
            'tipo'=>'8',
        ]);
        $user = User::create([
            'persona_id' => $persona->id,
            'oficina_id' => '3',
            'email'      => 'NORMA.BEATRIZ.JARA.PISARELLO@gmail.com',
            'cuil'       => '27124374915',
            'password'   => Hash::make('password'),
        ]);
        $user->givePermissionTo(['name' => "Asesoramiento Jurídico Gratuito"]);

        $persona = Persona::create([
            'dni' => '18133698', 
            'nombre' => 'EDUARDO JESUS',
            'apellido' => 'FERNANDEZ DOS SANTOS',
            'telefono' => '',
            'correo' => '',
            'domicilio' => '',
            'localidad_id' => '3',
            'tipo'=>'8',
        ]);
        $user = User::create([
            'persona_id' => $persona->id,
            'oficina_id' => '3',
            'email'      => 'EDUARDO.JESUS.FERNANDEZ.DOS.SANTOS@gmail.com',
            'cuil'       => '20181336987',
            'password'   => Hash::make('password'),
        ]);
        $user->givePermissionTo(['name' => "Asesoramiento Jurídico Gratuito"]);

        $persona = Persona::create([
            'dni' => '20085274', 
            'nombre' => 'ENRIQUE',
            'apellido' => 'SOVERÓN',
            'telefono' => '',
            'correo' => '',
            'domicilio' => '',
            'localidad_id' => '3',
            'tipo'=>'8',
        ]);
        $user = User::create([
            'persona_id' => $persona->id,
            'oficina_id' => '25',
            'email'      => 'ENRIQUE.SOVERÓN@gmail.com',
            'cuil'       => '20181336987',
            'password'   => Hash::make('password'),
        ]);
        $user->givePermissionTo(['name' => "Mesa de Entradas"]);

        $persona = Persona::create([
            'dni' => '26847920', 
            'nombre' => 'SILVIA',
            'apellido' => 'MANICLER',
            'telefono' => '',
            'correo' => '',
            'domicilio' => '',
            'localidad_id' => '3',
            'tipo'=>'8',
        ]);
        $user = User::create([
            'persona_id' => $persona->id,
            'oficina_id' => '25',
            'email'      => 'SILVIA.MANICLER@gmail.com',
            'cuil'       => '27268479207',
            'password'   => Hash::make('password'),
        ]);
        $user->givePermissionTo(['name' => "Mesa de Entradas"]);

        $persona = Persona::create([
            'dni' => '33125030', 
            'nombre' => 'PEDRO',
            'apellido' => 'RODRIGUEZ',
            'telefono' => '',
            'correo' => '',
            'domicilio' => '',
            'localidad_id' => '3',
            'tipo'=>'8',
        ]);
        $user = User::create([
            'persona_id' => $persona->id,
            'oficina_id' => '25',
            'email'      => 'PEDRO.RODRIGUEZ@gmail.com',
            'cuil'       => '29331250309',
            'password'   => Hash::make('password'),
        ]);
        $user->givePermissionTo(['name' => "Mesa de Entradas"]);

        $persona = Persona::create([
            'dni' => '30898154', 
            'nombre' => 'MARIA  EUGENIA',
            'apellido' => 'VILA',
            'telefono' => '',
            'correo' => '',
            'domicilio' => '',
            'localidad_id' => '3',
            'tipo'=>'8',
        ]);
        $user = User::create([
            'persona_id' => $persona->id,
            'oficina_id' => '25',
            'email'      => 'MARIA.EUGENIA.VILA@gmail.com',
            'cuil'       => '27308981547',
            'password'   => Hash::make('password'),
        ]);
        $user->givePermissionTo(['name' => "Mesa de Entradas"]);

        $persona = Persona::create([
            'dni' => '16953750', 
            'nombre' => 'ALEJANDRO',
            'apellido' => 'JAUREGUI',
            'telefono' => '',
            'correo' => '',
            'domicilio' => '',
            'localidad_id' => '3',
            'tipo'=>'8',
        ]);
        $user = User::create([
            'persona_id' => $persona->id,
            'oficina_id' => '14',
            'email'      => 'ALEJANDRO.JAUREGUI@gmail.com',
            'cuil'       => '20169537500',
            'password'   => Hash::make('password'),
        ]);
        $user->givePermissionTo(['name' => "Formulación de Reclamos"]);

        $persona = Persona::create([
            'dni' => '29810734', 
            'nombre' => 'LIS',
            'apellido' => 'LOPEZ',
            'telefono' => '',
            'correo' => '',
            'domicilio' => '',
            'localidad_id' => '3',
            'tipo'=>'8',
        ]);
        $user = User::create([
            'persona_id' => $persona->id,
            'oficina_id' => '14',
            'email'      => 'LIS.LOPEZ@gmail.com',
            'cuil'       => '27298107347',
            'password'   => Hash::make('password'),
        ]);
        $user->givePermissionTo(['name' => "Formulación de Reclamos"]);

        $persona = Persona::create([
            'dni' => '24174800', 
            'nombre' => 'CARINA',
            'apellido' => 'PAIVA',
            'telefono' => '',
            'correo' => '',
            'domicilio' => '',
            'localidad_id' => '3',
            'tipo'=>'8',
        ]);
        $user = User::create([
            'persona_id' => $persona->id,
            'oficina_id' => '14',
            'email'      => 'CARINA.PAIVA@gmail.com',
            'cuil'       => '27241748001',
            'password'   => Hash::make('password'),
        ]);
        $user->givePermissionTo(['name' => "Formulación de Reclamos"]);

        $persona = Persona::create([
            'dni' => '36194277', 
            'nombre' => 'VALERIA  NOEMÍ',
            'apellido' => 'IVAN',
            'telefono' => '',
            'correo' => '',
            'domicilio' => '',
            'localidad_id' => '3',
            'tipo'=>'8',
        ]);
        $user = User::create([
            'persona_id' => $persona->id,
            'oficina_id' => '14',
            'email'      => 'VALERIA.NOEMI.IVAN@gmail.com',
            'cuil'       => '27361942774',
            'password'   => Hash::make('password'),
        ]);
        $user->givePermissionTo(['name' => "Formulación de Reclamos"]);

        $persona = Persona::create([
            'dni' => '20374045', 
            'nombre' => 'FABIO',
            'apellido' => 'CASTILLO',
            'telefono' => '',
            'correo' => '',
            'domicilio' => '',
            'localidad_id' => '3',
            'tipo'=>'8',
        ]);
        $user = User::create([
            'persona_id' => $persona->id,
            'oficina_id' => '14',
            'email'      => 'FABIO.CASTILLO@gmail.com',
            'cuil'       => '20203740450',
            'password'   => Hash::make('password'),
        ]);
        $user->givePermissionTo(['name' => "Formulación de Reclamos"]);

        $persona = Persona::create([
            'dni' => '12367575', 
            'nombre' => 'GRACIELA',
            'apellido' => 'BERMUDEZ',
            'telefono' => '',
            'correo' => '',
            'domicilio' => '',
            'localidad_id' => '3',
            'tipo'=>'8',
        ]);
        $user = User::create([
            'persona_id' => $persona->id,
            'oficina_id' => '69',
            'email'      => 'GRACIELA.BERMUDEZ@gmail.com',
            'cuil'       => '23123675754',
            'password'   => Hash::make('password'),
        ]);
        $user->givePermissionTo(['name' => "Rúbrica"]);

        $persona = Persona::create([
            'dni' => '31210765', 
            'nombre' => 'CARLOS',
            'apellido' => 'FIGUEROA',
            'telefono' => '',
            'correo' => '',
            'domicilio' => '',
            'localidad_id' => '3',
            'tipo'=>'8',
        ]);
        $user = User::create([
            'persona_id' => $persona->id,
            'oficina_id' => '69',
            'email'      => 'CARLOS.FIGUEROA@gmail.com',
            'cuil'       => '23123675754',
            'password'   => Hash::make('password'),
        ]);
        $user->givePermissionTo(['name' => "Rúbrica"]);

        $persona = Persona::create([
            'dni' => '20676906', 
            'nombre' => 'ROXANA',
            'apellido' => 'ESCOBAR',
            'telefono' => '',
            'correo' => '',
            'domicilio' => '',
            'localidad_id' => '3',
            'tipo'=>'8',
        ]);
        $user = User::create([
            'persona_id' => $persona->id,
            'oficina_id' => '69',
            'email'      => 'ROXANA.ESCOBAR@gmail.com',
            'cuil'       => '27206769063',
            'password'   => Hash::make('password'),
        ]);
        $user->givePermissionTo(['name' => "Rúbrica"]);

        /*User::create([
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

        User::factory()->count(80)->create(['password' => Hash::make('password')]);*/
    }
}
