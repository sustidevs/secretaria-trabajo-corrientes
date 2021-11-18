<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Feriado;
use App\Models\Oficina;
use App\Models\TipoTramite;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Oficina extends Model
{
    use HasFactory;

    public function delegacion()
    {
        return $this->belongsTo(Delegacion::class);
    }
    
    public function tiposTramite()
    {
        return $this->belongsTo(TiposTramite::class);
    }

    public function turnos()
    {
        return $this->hasMany(Turno::class);
    }

    public function dias()
    {
        return $this->belongsToMany(Dia::class, 'horarios_atencion', 'oficina_id', 'dia_id');
    }
    
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /*
    * Tabla intermedia entre oficina y dias
    */
    public function horariosAtencion()
    {
        return $this->hasMany(HorarioAtencion::class);
    }

    public function diasAtencion()
    {
        return $this->belongsToMany(Dia::class,'horario_atenciones', 'oficina_id', 'dia_id');
    }

    /**
    *  Retorna la oficina correspondiente, segun el tipo de tramite y la delegacion que recibe como parametros
    * 
    */
    public function scopeGetOficina($query, $delegacion_id, $tipoTramite_id)
    {
        return $query->where('delegacion_id',$delegacion_id)
                     ->where('tipo_tramite_id',$tipoTramite_id)
                     ->first();
    }

    /*
    * Retorna los turnos en formato de Array (collect([])).
    */
    public function getTurnosPorFecha($fecha)
    {
        $turnos = $this->turnos->where('fecha',$fecha);
        return $this->convert_to_array($turnos);
    }

    /*
    * Retora el modelo de Turnos (Turnos::class)
    */
    public function turnosPorFecha($fecha)
    {
        $turnos = $this->turnos->where('fecha',$fecha);
        return $turnos;
    }

    public function turnosHoy()
    {
        $hoy = Carbon::now()->toDateString();
        $turnos = $this->turnos->where('fecha',$hoy);
        return $this->convert_to_array($turnos);
    }
    /*
    * lista los turnos de asesoramiento de una delegacion, con la fecha de hoy.
    */
     public function turnosAsesoramiento()
     {
         $hoy = Carbon::now()->toDateString();
         $turnos = $this->turnos->where('fecha',$hoy)
                                ->where('estado',0);                        
         $arrayTurnos = Collect();
         foreach ($turnos as $turno) {
             $motivo = TipoTramite::findOrFail($turno->motivo)->descripcion;
             $arrayTurnos->push(['id' => $turno->id,
                                 'hora' => $turno->darFormatoHora(),
                                 'solicitante_id' => $turno->solicitante_id,
                                 'nombre_solicitante' => $turno->solicitante->apellidoyNombre(),
                                 'dni_solicitante' => $turno->solicitante->dni,
                                 'motivo_id' => $turno->motivo,
                                 'motivo' => $motivo,
                                  ]);
         }                          
         return $arrayTurnos;
     }

     /**
    *  convierte en un array los turnos que recibe como parametro, para ser pasados a la vista 
    * 
    */
    private function convert_to_array($turnos){
        $arrayTurnos = Collect();
        $cont = 1;
        $turnos = $turnos->sortBy([
                ['fecha'],
                ['hora'],
        ]);
        foreach ($turnos as $turno) {
            $fecha = date("d/m/Y", strtotime($turno->fecha));
            $fecha = $fecha.' - '.$turno->darFormatoHora();
            if ($turno->motivo != null){
                $motivo = TipoTramite::findOrFail($turno->motivo)->descripcion;
            }
            else {
                $motivo = null;
            }
            if ($turno->posee_abogado) {
                $abogado_name = $turno->abogado->apellidoyNombre();
            } else {
                $abogado_name ='No tiene un abogado asignado';
            }
            
            $arrayTurnos->push(['id' => $turno->id,
                                'orden_turno' => $cont,
                                'fecha_hora' => $fecha,
                                'hora' => $turno->darFormatoHora(),
                                'solicitante_id' => $turno->solicitante_id,
                                'nombre_solicitante' => $turno->solicitante->apellidoyNombre(),
                                'nombre_dni_solicitante' => $turno->solicitante->apellidoyNombre() . ' (DNI: '.$turno->solicitante->dni.')',
                                'dni_solicitante' => $turno->solicitante->dni,
                                'posee_abogado' => $turno->posee_abogado,
                                'abogado_id' => $turno->abogado_id,
                                'abogado_name' => $abogado_name,
                                'nombre_abogado' => $turno->abogado->apellidoyNombre() . ' (DNI: '.$turno->abogado->dni.')',
                                //'dni_abogado' => $turno->abogado->dni,
                                'estado_id' => $turno->estado,
                                'tipo_tramite_id' => $turno->oficina->tipo_tramite_id,
                                'estado_nombre' => $turno->getEstado(),
                                'motivo' => $motivo,
                            ]);
            $cont +=  1;                  
        }
        return $arrayTurnos;
    }

    public function horariosOcupados($fecha)
    {
        $turnosOcupados = $this->turnosPorFecha($fecha);
        $horariosOcupados = collect();
        foreach ($turnosOcupados as $turno) {
            $hora = new Carbon('2010-05-16 '.$turno->hora);
            $horariosOcupados->push($hora->toTimeString('minute'));
        }
        return $horariosOcupados;
    }

    public function horariosDeAtencion()
    {
        $horaAtencion = $this->horariosAtencion->first();//Obtiene los datos de atencion del tramite (Tabla Pivot).
        $firstHorario = new Carbon('2010-05-16 '.$horaAtencion->horario_inicio);
        $horariosAtencion = collect($firstHorario->toTimeString('minute'));

        while ($horariosAtencion->count() < $horaAtencion->cant_max_turno) {
            $nuevoTurno = new Carbon('2010-05-16 '.$horariosAtencion->last());
            $nuevoTurno->addMinutes($horaAtencion->intervalo_turno);
            $horariosAtencion->push($nuevoTurno->toTimeString('minute')); 
        }
        return $horariosAtencion;
    }

    public function diasDeAtencion()
    {
        $arrayDias = collect();
        $diasAtencion = $this->diasAtencion;
        foreach ($diasAtencion as $dia) {
            $arrayDias->push($dia->id);
        }

        return $arrayDias;
    }

    public function horariosDisponibles($fecha)
    {
        $horariosOcupados = $this->horariosOcupados($fecha);
        $horariosAtencion = $this->horariosDeAtencion();
        $horariosDisponibles = $horariosAtencion->diff($horariosOcupados);
        return $horariosDisponibles;
    }

    /**
    *  Retorna un array de los feriados inamovibles (toma el año actual por defecto), y de los feriados turisticos
    *  y trasladables (estos solo corresponden al año 2021).
    *
    */
    public static function feriados()
    {
        return Feriado::dias_feriados(); //TODO falta el modelo de Feriado
    }

    public function fechasDisponibles()
    {
        //Si el tipo de tramite es igual a 2 (Formulacion de Reclamos), el turno se fija a partir de los 14 dias.
        if ($this->tipoTramite->id == 2) {
            $fecha = new Carbon('now');
            $fecha = $fecha->addDay(14); 
        } else {
            $fecha = new Carbon('tomorrow'); 
        }
        
        $fechasDisponibles = collect();
        while ($fechasDisponibles->count() < 10) {
            
            if($fecha->dayOfWeekIso == 6){ //si el dia es sabado, suma  2 dias.
                $fecha = $fecha->addDay(2); 
            }

            if($fecha->dayOfWeekIso == 7){ //si el dia es domingo, suma 1 dia.
                $fecha = $fecha->addDay(1); 
            }

            //si no es un dia de atencion o si es feriado, suma 1 dia.
            if(in_array($fecha->dayOfWeekIso, $this->diasDeAtencion()->toArray()) == false || 
               in_array($fecha->toDateString(),$this->feriados()) == true )
            { 
               $fecha = $fecha->addDay(1);     
            }
            else{

                if ($this->horariosDisponibles($fecha->toDateString())->count() != 0) {
                    $fechasDisponibles->push($fecha->toDateString());
                    $fecha = $fecha->addDay(); 
                } 
                else {
                    $fecha = $fecha->addDay();
                }
            }
        }
        return $fechasDisponibles;
    }

    public function array_fechas_horarios()
    {
        $arrayFechas = collect();
        $fechasDisponibles = $this->fechasDisponibles();
        foreach ( $fechasDisponibles as $fecha) {
            $horarios = $this->horariosDisponibles($fecha)->toArray();
            $arrayFechas->push([date("d/m/Y", strtotime($fecha)) => $horarios]);
        }
        return $arrayFechas->collapse();
    }
    /*
    * No se lo esta utilizando.
    * Muestra las fecha y horarios en un formato diferente al de: array_fechas_disponibles()
    */
    public function fechas_horarios_disponibles()
    {
        $arrayFechas = collect();
        $fechasDisponibles = $this->fechasDisponibles();
        foreach ( $fechasDisponibles as $fecha) {
            $horarios = $this->horariosDisponibles($fecha)->toArray();
            $arrayFechas->push(['fecha' =>$fecha, 'horarios' => $horarios]);
        }
        return $arrayFechas;
    }

    public function filtrarAño($año)
    {
        $turnos = Turno::filtrarAño($año)->where('oficina_id',$this->id);
        return $turnos;
    }

    public function filtrarMes($año, $mes)
    {
        $turnos = Turno::filtrarMes($año, $mes)->where('oficina_id',$this->id);
        return $turnos;
    }

    /**
    *  Retorna los turnos en el rango de fechas que recibe como parametro.
    * 
    */
    public function turnos_by_date($fechaDesde, $fechaHasta)
    {  
        //Para cambiar el formato de la fecha que recibe
        //$fechaDesde = Carbon::createFromFormat('d/m/Y', $fechaDesde)->format('Y-m-d');
        // $fechaDesde = date('Y-m-d', strtotime($fechaDesde));
        // $fechaHasta = date('Y-m-d', strtotime($fechaHasta));
        $turnos = $this->turnos()->whereBetween('fecha', [$fechaDesde, $fechaHasta])->get();
        return $this->convert_to_array($turnos);;
    }

}
