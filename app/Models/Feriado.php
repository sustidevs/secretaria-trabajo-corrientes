<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feriado extends Model
{
    use HasFactory;
    public $timestamps = false;

    public static function dias_feriados(){
        $diasFeriados = Collect([]);
        foreach (Feriado::all() as $feriado) {
            $fecha = Carbon::createFromDate(null, $feriado->mes, $feriado->dia);
            $diasFeriados->push($fecha->toDateString());
        }
        return $diasFeriados->toArray();
    }

}
