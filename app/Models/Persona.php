<?php

namespace App\Models;

use App\Models\Turno;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Persona extends Model
{
    use HasFactory;

    public function localidad()
    {
        return $this->belongsTo(Localidad::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function turnos()
    {
        return $this->hasMany(Turno::class);
    }
}
