<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Localidad;
use App\Models\Delegacion;
use Illuminate\Support\Str;
use App\Models\TiposTramite;
use Illuminate\Http\Request;

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
}
