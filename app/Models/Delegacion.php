<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delegacion extends Model
{
    use HasFactory;

    protected $table = "delegaciones";

    /**
    * Los usuarios (empleados/delegados) que pertenece a la delegacion.
    */
    public function empleados()
    {
        return $this->belongsToMany(User::class, 'delegados', 'delegacion_id', 'user_id');
    }
    
    public function oficinas()
    {
        return $this->hasMany(Oficina::class);
    }
        
    public function localidad()
    {
        return $this->belongsTo(Localidad::class);
    }
}
