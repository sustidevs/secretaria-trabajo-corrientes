<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    use HasFactory;

    protected $table = 'localidades';

    
    public function personas()
    {
        return $this->hasMany(Persona::class);
    }

    public function delegaciones()
    {
        return $this->hasMany(Delegacion::class);
    }
}
