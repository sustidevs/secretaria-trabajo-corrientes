<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Localidad;
use App\Models\Turno;
use Illuminate\Http\Request;
use Inertia\Inertia;

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
        $persona = Persona::findOrFail($request->id);
        $localidades= Localidad::all()->except(['27']);//Excepto Todas
        return response()->json([$persona, $localidades], 200);
        /*return Inertia::render('Vista',
                                ['dataPersona' => $persona,
                                 'dataLocalidades' => $localidades,]);*/
    
    }
    
    /**
    * Abogados Internos
    *
    */
    public function indexAbogadosInternos(Request $request)
    {
        
        $persona = Persona::si_existe($request->dni);
        $abogados_internos = Persona::abogadosInternos();
        return Inertia::render('ListadoAbogadosAsignar',['dataAbogados' => $abogados_internos, 'solicitante' => $persona]);
    }

    /**
    * Store para Abogados Internos
    *
    */
    public function storeAbogado(Request $request)
    {
        $persona = new Persona;
        $persona->dni = $request->dni;
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->telefono = $request->telefono;
        $persona->correo = $request->correo;
        $persona->domicilio = $request->domicilio;
        $persona->localidad_id = $request->localidad_id;
        $persona->tipo = 9; //Abogado Interno

        if ($persona->save())
        {
            return response()->json([$persona->datosPersona()], 200);
            /*return Inertia::render('Vista',
                                 'dataPersona' => $persona,]);*/
        }
       
    }
    /**
    * Update para Abogados Internos
    *
    */
    public function updateAbogado(Request $request)
    {
        $personaUpdate = Persona::findOrFail($request ->id);
        $personaUpdate->dni = $request->dni;
        $personaUpdate->nombre = $request->nombre;
        $personaUpdate->apellido = $request->apellido;
        $personaUpdate->telefono = $request->telefono;
        $personaUpdate->domicilio = $request->domicilio;
        $personaUpdate->correo = $request->correo;
        $personaUpdate->localidad_id = $request->localidad_id;
        $personaUpdate->tipo = 9;//Abogado Interno
        
        if ($personaUpdate->save())
        {
            return response()->json([$personaUpdate->datosPersona()], 200);
            /*return Inertia::render('Vista',
                                 'dataPersona' => $personaUpdate,]);*/
        }
       
    }

    /**
    * Abogados Internos
    *
    */
    public function createAbogado()
    {
        $localidades= Localidad::all()->except(['27']);//Excepto Todas
    return Inertia::render('AddAbogado',['dataLocalidades' => $localidades]);
    }
}
