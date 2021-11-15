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
    public function users()
    {
        return $this->hasMany(User::class);
    }
    
    public function oficinas()
    {
        return $this->hasMany(Oficina::class);
    }
        
    public function localidad()
    {
        return $this->belongsTo(Localidad::class);
    }

    public function localidadNombre()
    {
        $nombreLocalidadDireccion = $this->localidad->nombre . ' ('.$this->direccion .')';
        
        return  $nombreLocalidadDireccion;
    }

}
