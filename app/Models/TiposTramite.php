<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiposTramite extends Model
{
    use HasFactory;
    protected $table = "tipos_tramite";

    public function oficinas()
    {
        return $this->hasMany(Oficina::class);
    }
    

    public function requisitos()
    {
        return $this->hasMany(Requisito::class);
    }

    public function tipoRequisitos($tipoRequisito)
    {
        return $this->requisitos->where('tipo', $tipoRequisito);
    }

    public function listadoRequisitos()
    {
        $arrayRequisitos = collect(['requisitos'  =>  $this->tipoRequisitos(1),
                                    'aclaracion'  =>  $this->tipoRequisitos(2),
                                    'advertencia' =>  $this->tipoRequisitos(3),
                                    'dias'        =>  $this->tipoRequisitos(4),
                                    'horarios'    =>  $this->tipoRequisitos(5),]);
        return $arrayRequisitos;
    }


}
