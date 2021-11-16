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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
