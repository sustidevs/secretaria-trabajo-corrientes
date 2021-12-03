<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\User;
use App\Models\Oficina;
use App\Models\Localidad;
use App\Models\Delegacion;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Models\TiposTramite;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    public function index()
    {
        $users = User::index();
        return response()->json([$users], 200);
        /*return Inertia::render('Vista',
                                ['dataUsers' => $users,]);*/
    }

    public function create()
    {
        $delegaciones = Delegacion::localidadesDireccion();
        $tipoTramites = TiposTramite::all(); //Para saber a que oficina pertenece
        $permisos = Permission::all();
        $localidades= Localidad::all()->except(['27']);//Excepto Todas
        $tipoUsuarios = User::tiposUsuario();
        return response()->json([$delegaciones,$tipoTramites,$localidades,$tipoUsuarios,$permisos], 200);
        /*return Inertia::render('Vista',
                                ['dataDelegaciones' => $delegaciones,
                                ['dataLocalidades' => $localidades,
                                ['permisos' => $permisos,
                                ['tipoUsuarios' => $tipoUsuarios,
                                 'tipoTramites' => $tipoTramites,]);*/
    }

    public function store(Request $request)
    {
        $persona = new Persona;
        $persona->dni = $request->dni;
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->telefono = $request->telefono;
        $persona->correo = $request->correo;
        $persona->domicilio = $request->domicilio;
        $persona->localidad_id = $request->localidad_id;
        $persona->tipo = $request->tipo_persona_id;//Es el mismo que User::tiposUsuario()
        $persona->save();

        $user = new User;
        $oficina_id = Oficina::getOficina($request->delegacion_id,$request->tipo_tramite_id)->id;
        $user->persona_id = $persona->id;
        $user->oficina_id = $oficina_id;
        $user->cuil = $request->cuil;
        $user->email = $request->correo;
        $user->password = Hash::make($request->password);
        foreach($request->permisos as $permiso){
            $user->givePermissionTo(["name"=>$permiso->name]);
        }
        $user->save();
        return response()->json([$user], 200);
        /*return Inertia::render('Vista',
                                ['dataUser' => $user,]);*/
    }

    public function edit(Request $request)
    {
        $user = User::findOrFail($request->id);
        $delegaciones = Delegacion::localidadesDireccion();
        $tipoTramites = TiposTramite::all(); //Para saber a que oficina pertenece
        $permisos = Permission::all();
        $localidades= Localidad::all()->except(['27']);//Excepto Todas
        $tipoUsuarios = User::tiposUsuario();
        return response()->json([$user,$delegaciones,$tipoTramites,$localidades,$tipoUsuarios,$permisos], 200);
        /*return Inertia::render('Vista',
                                ['dataUser' => $user,
                                ['dataDelegaciones' => $delegaciones,
                                ['dataLocalidades' => $localidades,
                                ['permisos' => $permisos,
                                ['tipoUsuarios' => $tipoUsuarios,
                                 'tipoTramites' => $tipoTramites,]);*/
    }

    public function update(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $persona = Persona::findOrFail($user->persona_id);
        $persona->dni = $request->dni;
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->telefono = $request->telefono;
        $persona->correo = $request->correo;
        $persona->domicilio = $request->domicilio;
        $persona->localidad_id = $request->localidad_id;
        $persona->tipo = $request->tipo_persona_id;//Es el mismo que User::tiposUsuario()
        $persona->save();

        $oficina_id = Oficina::getOficina($request->delegacion_id,$request->tipo_tramite_id)->id;
        $user->persona_id = $persona->id;
        $user->oficina_id = $oficina_id;
        $user->cuil = $request->cuil;
        $user->email = $request->correo;
        $user->password = Hash::make($request->password);
        foreach($request->permisos as $permiso){
            $user->givePermissionTo(["name"=>$permiso->name]);
        }
        $user->save();
        return response()->json([$user], 200);
        /*return Inertia::render('Vista',
                                ['dataUser' => $user,]);*/
    }

    public function destroy(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->delete();
        return response()->json([$user], 200);
        /*return Inertia::render('Vista',
                                ['dataUser' => $user,]);*/
    }

    public function restore(Request $request)
    {
        $user = User::withTrashed()->findOrFail($request->id);
        $user->restore();
        return response()->json([$user], 200);
        /*return Inertia::render('Vista',
                                ['dataUser' => $user,]);*/
    }

    public function resetPassword(Request $request)
    {
        return Inertia::render('ResetPassword');
    }

    public function resetPass(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->password = Hash::make($request->password);
        $user->save();
        return response()->json([$user], 200);
    }
}
