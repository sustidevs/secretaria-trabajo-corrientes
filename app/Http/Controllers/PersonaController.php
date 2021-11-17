<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return response()->json($personas, 200);
    }

    public function indexDelegados()
    {
        $delegados = Persona::delegados();
        return response()->json($delegados, 200);
    }

    public function indexAdminAreas()
    {
        $admins = Persona::adminAreas();
        return response()->json($admins, 200);
    }

    public function indexAbogados()
    {
        $abogados = Persona::abogados();
        return response()->json($abogados, 200);
    }

    public function indexSolicitantes()
    {
        $solicitantes = Persona::solicitantes();
        return response()->json($solicitantes, 200);
    }

    public function edit(Request $request)
    {
        $solicitante = Persona::findOrFail($request->id)->where('tipo', 7)->get();
        return response()->json($solicitante, 200);
    }
    
}
