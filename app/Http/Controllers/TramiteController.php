<?php

namespace App\Http\Controllers;

use App\Models\TiposTramite;
use Illuminate\Http\Request;

class TramiteController extends Controller
{

    /*
        Listado de requisitos para un determinado tramite.
        ENTRADA: id de tabla tipos_tramite.
        SALIDA: listado de requisitos(tabla requisitos), con descripcion y id de tipo de tramite(tabla tipos_tramite).
    */
    public function requisitos($id)
    {
        $tipoTramite = TiposTramite::FindOrFail($id);
        $requisitos = $tipoTramite->listadoRequisitos();
        //dd($requisitos);
        $nombreTramite = $tipoTramite->descripcion;
        //dd($tipoTramite);
        $pdf = PDF::loadView('requisitos',
        [
            'requisitos'=> $requisitos,
            'nombreTramite'=> $nombreTramite,
        ]);
        return $pdf->inline('requisitos.pdf');
    }

    public function index()
    {
        $tramites = TiposTramite::All();
        return response()->json($tramites, 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $request)
    {
        $tipoTramite = TiposTramite::findOrFail($request->id);
        $requisitos = $tipoTramite->listadoRequisitos();
        $tramite = collect(['id'    => $tipoTramite->id,
                            'nombre'=> $tipoTramite->descripcion]);
        return response()->json($tramite, 200);
        /*
        return Inertia::render('RequisitosTramites/RequisitosReclamo', ['dataRequisitos' => $requisitos,
                                                                        'tramite'        => $tramite]);*/
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
