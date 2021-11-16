<?php

namespace App\Http\Controllers;

use App\Models\Requisito;
use App\Models\TiposTramite;
use Illuminate\Http\Request;

class prueba extends Controller
{
    public function test()//JC
    {
        $tipoTramite = TiposTramite::FindOrFail(2);
        $requisitos = $tipoTramite->listadoRequisitos();
        $nombreTramite = $tipoTramite->descripcion;
        
        return [$requisitos];
    }

    public function test2()//AG
    {
        $tipoTramite = TiposTramite::FindOrFail(1);
        return [$tipoTramite->id, $tipoTramite->descripcion,$tipoTramite->requisitos];
    }
}
