<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    use HasFactory;

    public function solicitante()
    {
        return $this->belongsTo(Persona::class,'solicitante_id');
    }

    public function abogado()
    {
        return $this->belongsTo(Persona::class,'abogado_id');
    }

    public function oficina()
    {
        return $this->belongsTo(Oficina::class);
    }

    public function empleado()
    {
        return $this->belongsTo(User::class);
    }
}
