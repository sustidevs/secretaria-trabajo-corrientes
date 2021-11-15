<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;

class Persona extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Notifiable;

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
    /**
     * Return email address only
     */
    public function routeNotificationForMail($notification)
    {
        return $this->correo;
    }
    public static function delegados()
    {
        $delegados = Persona::where('tipo', 4)->get();
        return $delegados;
    }

    public static function adminAreas()
    {
        return Persona::where('tipo', 5)->get();
    }

    public static function abogados()
    {
        return Persona::where('tipo', 6)->get();
    }

    public static function solicitantes()
    {
        return Persona::where('tipo', 7)->get();
    }
    
    public function setNombreAttribute($value)
    {
        $this->attributes['nombre'] = ucwords(strtolower($value));
    }
    public function setApellidoAttribute($value)
    {
        $this->attributes['apellido'] = ucwords(strtolower($value));
    }

    /**
    * Convierte la primera letra de cada palabra en mayúscula.
    *
    */
    public function setDomicilioAttribute($value)
    {
        $this->attributes['domicilio'] = ucwords(strtolower($value));
    }

    /**
    * Convierte todas las letras en minuscula.
    *
    */
    public function setCorreoAttribute($value)
    {
        $this->attributes['correo'] = strtolower($value);
    }

    /**
    * verifica si la persona ya existe en el modelo.
    *
    */
    public static function si_existe($dni)
    {
        return Persona::all()->where('dni',$dni)->first();
    }
    public static function abogadosInternos()
    {
        $abogadosInternos = Persona::where('tipo', 9)->get();
        $arrayAbogados = Collect();
        $cont = 1; 
        foreach ($abogadosInternos as $abogado) {
            $arrayAbogados->push([
                'id' => $abogado->id,
                'nro_orden' => $cont,
                'dni' => $abogado->dni,
                'nombre' => $abogado->nombre,
                'apellido' => $abogado->apellido,
                'apellido-y-nombre' => $abogado->apellidoyNombre(),
                'telefono' => $abogado->telefono,
                'correo' => $abogado->correo,
                'domicilio' => $abogado->domicilio,
                'localidad_id' => $abogado->localidad_id,
                'localidad' => $abogado->localidad->nombre 
            ]);
            $cont = $cont + 1;
        }
        return $arrayAbogados;
    }
    public function apellidoyNombre()
    {
        $nombrePersona = $this->apellido .', '.$this->nombre;
        return  $nombrePersona;
    }
    
    public function datosPersona()
    {
        $persona = $this;
        $arrayPersona = collect([ 
            'id' => $persona->id,
            'dni' => $persona->dni,
            'nombre' => $persona->nombre,
            'apellido' => $persona->apellido,
            'telefono' => $persona->telefono,
            'correo' => $persona->correo,
            'domicilio' => $persona->domicilio,
            'localidad_id' => $persona->localidad_id,
            'localidad' => $persona->localidad->nombre]);
        return $arrayPersona;
    }
}
