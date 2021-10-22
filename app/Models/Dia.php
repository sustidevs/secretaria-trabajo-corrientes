<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    use HasFactory;

    /**
    * Las oficinas que atienden ese dia.
    */
    public function oficinas()
    {
        return $this->belongsToMany(Oficina::class, 'horarios_atencion', 'dia_id', 'oficina_id');
    }
}
