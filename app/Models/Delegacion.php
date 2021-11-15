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

    public static function localidadesDireccion()
    {
        $arrayDelegaciones= collect();
        $delegaciones = Delegacion::All()->except(['12']);
        foreach ($delegaciones as $delegacion)
        {
            $arrayDelegaciones->push(['id' => $delegacion->id, 'nombre' => $delegacion->localidadNombre()]);
        }
        return  $arrayDelegaciones;
    }
}
