<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Laravel\Jetstream\HasProfilePhoto;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
    * Las delegaciones que pertenece el  usuario (empleado/delegado).
    * Puede ser una sola o muchas delegaciones.
    */
    public function delegaciones()
    {
        return $this->belongsToMany(Delegacion::class, 'delegados', 'user_id', 'delegacion_id');
    }

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

    public function oficina()
    {
        return $this->belongsTo(Oficina::class);
    }

    public function turnos()
    {
        return $this->hasMany(Turno::class);
    }

    /**
    * Obtiene los tramites a los que tiene permiso de acceso el usuario
    * 
    */
    public static function getPermission()
    {
        $tramites = Auth::User()->getAllPermissions(); //TODO 
        $arrayTramites = Collect(); 
        foreach ($tramites as $tramite) {
            $arrayTramites->push(['id' => $tramite->id, 'name' => $tramite->name]);
        }
        return $arrayTramites;
    }

    /**
    * Retorna un array con los datos de todos los usuarios
    * 
    */
    public static function index()
    {
        $Users = User::all();
        $arrayUsers = Collect(); 
        foreach ($users as $user) {
            if ($user->cuil != null){
                $cuil = $user->cuil;
            }
            else {
                $cuil = 'Sin Cuil';
            }
            $arrayUsers->push(['user_id' => $user->id, 
                               'persona_id' => $user->persona_id,
                               'oficina_id' => $user->oficina_id,
                               'oficina' => $user->oficina->tipoTramite->descripcion,
                               'delegacion' => $user->oficina->delegacion->localidadNombre(),
                               'cuil' => $cuil,
                               'email' => $user->email,
                               'dni' => $user->persona->dni,
                               'nombre_user' => $user->persona->apellidoyNombre(), 
                               'telefono' => $user->persona->telefono, 
                               'domicilio' => $user->persona->domicilio, 
                               'localidad_id' => $user->persona->localidad_id, 
                               'localidad' => $user->persona->localidad->nombre, //TODO Falta tipo de usuario
                            ]);
        }
        return $arrayUsers;
    }
}
