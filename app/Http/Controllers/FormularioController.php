<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Inertia\Inertia;
use App\Models\Turno;
use App\Models\Localidad;
use App\Models\Delegacion;
use Illuminate\Support\Str;
use App\Models\TiposTramite;
use Illuminate\Http\Request;
use PDF;

class FormularioController extends Controller
{
    public function create()
    {
        $delegaciones= Delegacion::localidadesDireccion();
        $localidades = Localidad::All()->except(['26']);
        $tiposTramites = TiposTramite::All()->except(['1']);

        return Inertia::render('FormularioTurno/Formulario',
        [
            'dataDelegaciones'  => $delegaciones,
            'dataLocalidades'   => $localidades,
            'dataTramites'      => $tiposTramites
        ]);
    }

    public function show(Request $request)
    {
        $turno = Turno::findOrFail($request->id);
        return $turno;
    }
    
    public function comprobanteTurno(Request $request)  //TODO verificar despues con datos cargados
    {
        $turno = Turno::findOrFail($request->id);
        $pdf = PDF::loadView('pdfTurno',
        [
            'turno'=> $turno
        ]);
        return $pdf->inline('pdfTurno.pdf');
    }
}
