<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Delegacion;
use Illuminate\Http\Request;

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
        $localidades= Localidad::all()->except(['27']);//Excepto Todas
        return response()->json([$delegaciones,$tipoTramites,$localidades], 200); //TODO aqui iria si es un empleado o administrador?
        /*return Inertia::render('Vista',
                                ['dataDelegaciones' => $delegaciones,
                                ['dataLocalidades' => $localidades,
                                 'tipoTramites' => $tipoTramites,]);*/
    }
}
