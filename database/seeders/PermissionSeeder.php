<?php

namespace Database\Seeders;

use App\Models\TiposTramite;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$role = Role::create(['name' => 'Admin']);

        //$role->givePermissionTo($permission);
        $tramites = TiposTramite::all();
        foreach ($tramites as $tramite) {
            Permission::create(['name' => $tramite->descripcion]);  
        }
        Permission::create(['name' => "todos"]);
    }
}
