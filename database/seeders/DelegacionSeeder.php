<?php

namespace Database\Seeders;

use App\Models\Delegacion;
use Illuminate\Database\Seeder;

class DelegacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Delegacion::create([
            'localidad_id' => '10',
            'telefono' => '3795045905',
            'correo' => 'perlaesantajuliana@live.com.are',
            'direccion' => 'Av Los primeros concejales 256 - Oficina 6 y 7',
        ]);
        Delegacion::create([
            'localidad_id' => '1', 
            'telefono' => '3795045902',
            'direccion' => 'Santa Fé 782',
            'correo' => 'delegaciondetrabajobellavista@gmail.com',
        ]); 
        
        Delegacion::create([
            'localidad_id' => '3',
            'telefono' => '3794433191',
            'direccion' => 'San Juan 1317',
            'correo' => 'secretariadetrabajo@gmail.com',
        ]); 

        Delegacion::create([
            'localidad_id' => '7',
            'telefono' => '3795045917', 
            'direccion' => 'Gral Velazco 1435',
            'correo' => 'sdt.delesquina@gmail.com'
        ]); 
        Delegacion::create([
            'localidad_id' => '5', 
            'telefono' => '3795045906', 
            'direccion' => 'Rivadavia 830', 
            'correo' => 'sdt.delcc@gmail.com'
        ]);

        Delegacion::create([
            'localidad_id' => '15',
            'telefono' => '3795045903', 
            'direccion' => 'Juan Pujol 759' , 
            'correo' => 'sdt.delmercedes@hotmail.com'
        ]);

        Delegacion::create([
            'localidad_id' => '16',
            'telefono' => '3795045910', 
            'direccion' => 'Colon 1271 - Local 1', 
            'correo' => 'delegacionmcaseros@gmail.com'
        ]);
       
        Delegacion::create([
            'localidad_id' => '12',
            'telefono' => '3795045908', 
            'direccion' => 'B° Los Constituyentes - ex B° 231 Viv. Calle P casa N° 50', 
            'correo' => 'ajmlopez01@gmail.com'
        ]);
        
        Delegacion::create([
            'localidad_id' => '17',
            'telefono' => '3795045912', 
            'direccion' => 'Coronel Lopez 816 P.B.', 
            'correo' => 'sdt.delegacionplibres@gmail.com'
        ]);
        Delegacion::create([
            'localidad_id' => '24',
            'telefono' => '3795045911', 
            'direccion' => 'Yrigoyen 876', 
            'correo' => 'susanamarkaevicz12@outlook.com'
        ]);

        Delegacion::create([
            'localidad_id' => '25',
            'telefono' => '3795045913', 
            'direccion' => 'Remedios Escalada 943 - Local 3', 
            'correo' => 'delegaciontrabajogdorvirasoro@gmail.com'
        ]); 

        Delegacion::create([
            'localidad_id' => '26', 
            'telefono' => '3795045903', 
            'direccion' => 'Todas' , 
            'correo' => 'todas@hotmail.com'
        ]);
    }
}
