<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Turno extends Model
{
    use HasFactory;

    public function solicitante()
    {
        return $this->belongsTo(Persona::class,'solicitante_id');
    }

    public function abogado()
    {
        return $this->belongsTo(Persona::class,'abogado_id');
    }

    public function oficina()
    {
        return $this->belongsTo(Oficina::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
    * Retorna el estado correspondiente del turno ("Pendiente","Presente" o "Ausente")
    */
    public function getEstado()
    {
        $estado = collect(["Pendiente","Presente","Ausente"]);
        return $estado[$this->estado];
    }

    public function datosTurno()
    {
        $turno = $this;
        $fecha = date("d/m/Y", strtotime($turno->fecha));//cambia el formato de la fecha.
        $ubicacion = 'San Juan 1317, Corrientes,Capital';
        $nombreAbogado = $turno->abogado->nombre.' '.$turno->abogado->apellido;
        $hora = new Carbon('2010-05-16 '.$turno->hora);
        $arrayTurno = collect([ 
                                'turno_id' => $turno->id,
                                'fecha' => $fecha,
                                'hora' => $hora->toTimeString('minute'),
                                'ubicacion' => $ubicacion,
                                'nombre'=> $turno->solicitante->nombre,
                                'apellido' => $turno->solicitante->apellido,
                                'dni' => $turno->solicitante->dni,
                                'posee_abogado' => $turno->posee_abogado,
                                'nombre_abogado' => $nombreAbogado,
                                'dni_abogado' => $turno->abogado->dni]); 
        return $arrayTurno;
    }

    public function darFormatoFecha()
    {
        $fecha = date("d/m/Y", strtotime($this->fecha));
        return $fecha;
    }

    public function darFormatoHora()
    {
        $nuevaHora = new Carbon('2010-05-16 '.$this->hora);
        $hora = $nuevaHora->toTimeString('minute');
        return $hora;
    }

    //Muestra los turnos con o sin abogados dependiendo el parametro
    public static function abogadosAsignados($posee_abogado)
    {
        return Turno::where('posee_abogado', $posee_abogado)->get(); 
    }

    public static function converttoArray($array)
    {
        $array_convert = collect();
        foreach ($array as $item)
        {
            $array_convert->push(strval($item->id));
        }
        return $array_convert->toArray();
    }

    public function scopeFiltrarAño($query, $año)
    {
        $consultaAños = $query->whereYear('fecha', $año)->get('id');
        $arrayTurnos = Turno::converttoArray($consultaAños);
        $turnos = Turno::All()->only($arrayTurnos);
        return $turnos;
    }

    public function scopeFiltrarMes($query, $año, $mes) // Ambos parámetros en números.
    {
        $mes = $query->whereYear('fecha', $año)
                     ->whereMonth('fecha', $mes)
                     ->get('id');
        $arrayTurnos = Turno::converttoArray($mes);
        $turnos = Turno::All()->only($arrayTurnos);
        return $turnos;
    }

    /**
    * Obtiene las fechas y horarios disponibles segun el tipo de tramite y la delegacion
    * 
    */
    public static function getFechas($delegacion_id, $tipo_tramite_id)
    {
        $oficina = Oficina::getOficina($delegacion_id, $tipo_tramite_id);
        $fechasDisponibles = Oficina::findOrFail($oficina->id)->array_fechas_horarios();
        return $fechasDisponibles;
    }
    
    /**
    * Obtiene listado de turnos del dia por tipo de tramite
    */
    public static function get_turnos_by_tramite($tipo_tramite_id)
    {
        $delegacion_id = Auth::User()->oficina->delegacion_id;
        $oficina = Oficina::getOficina($delegacion_id, $tipo_tramite_id);
        $turnos = $oficina->turnosHoy();
        return $turnos;
    }
    
    /**
    * Verifica si el solicitante ya tiene un turno asignado para el tramite que recibe como parametros. 
    */
    public function scopeVerifica_si_existe($query,$solicitante_id, $oficina_id)
    {
        $hoy = Carbon::now()->toDate();
        $turno = $query->where('solicitante_id', $solicitante_id)
                    ->where('oficina_id', $oficina_id)
                    ->where('estado', '0')
                    ->whereDate('fecha', '>',$hoy)
                    ->get();
        return $turno;
    }
    public static function turnos_cancelados($oficina_id)
    {
        $turnos = Turno::onlyTrashed()
            ->where('oficina_id', $oficina_id)
            ->where('deleted_at', '!=', null)
            ->get();
        return $turnos;
    }

    /**
    * Retorna los turnos que ya pasaron la fecha del mismo y el estado esta como pendiente. 
    */
    public function scopeTurnos_pendientes($query)
    {
        $hoy = Carbon::now()->toDate();
        $turnoPendientes = $query->where('estado', '0')
                                 ->whereDate('fecha', '<', $hoy)
                                 ->get();
        return $turnoPendientes;
    }
    /**
    * Cambia el estado a ausente de los turnos que ya pasaron la fecha del mismo y el estado esta como pendiente.
    * Retorna la cantida de registros actualizados 
    */
    public static function cancelar_pendientes()
    {
       $hoy = Carbon::now()->toDate(); 
       return $updated = DB::table('turnos')
                    ->where('estado', '0')
                    ->whereDate('fecha', '<', $hoy)
                    ->update(['estado' => '2']);
    }
}
