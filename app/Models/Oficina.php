<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    use HasFactory;

    public function delegacion()
    {
        return $this->belongsTo(Delegacion::class);
    }
    
    public function tipoTramite()
    {
        return $this->belongsTo(TiposTramite::class);
    }

    public function turnos()
    {
        return $this->hasMany(Turno::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
