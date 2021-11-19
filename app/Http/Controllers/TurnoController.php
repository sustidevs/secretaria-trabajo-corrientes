<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Inertia\Inertia;
use App\Models\Oficina;
use App\Models\Persona;
use Illuminate\Http\Request;
//use App\Jobs\EnviaMailCancelacionTurno;

class TurnoController extends Controller
{
    use Notifiable;
    public function index(Request $request)     //TODO REVISAR
    {
        $tramites = User::getPermission();
        if ($tramites->count() == 1) 
        {
            $oficina_id = Auth::User()->oficina_id;
            $oficina = Oficina::findOrFail($oficina_id);
            $turnos = $oficina->turnosHoy();
        }
        else 
        {
            $oficina_id = Oficina::getOficina(Auth::User()->oficina->delegacion_id, $tramites->first()['id'])->id;
            $oficina = Oficina::findOrFail($oficina_id);
            $turnos = $oficina->turnosHoy();
        }

        $tipo_tramite_id = $oficina->tipo_tramite_id;
        if ($request->tipo_tramite_id != null) {
            $turnos = Turno::get_turnos_by_tramite($request->tipo_tramite_id);
            $tipo_tramite_id = $request->tipo_tramite_id;
        } 
        $abogadosInternos = Persona::abogadosInternos();
        $hoy = Carbon::now();
        $fecha = Carbon::createFromFormat('Y-m-d', $hoy->toDateString())->format('d/m/Y');
        return Inertia::render('TurnosRegistrado/TurnosR', ['dataAbogados'  => $abogadosInternos,
                                                            'dataTurnos'    => $turnos,
                                                            'dataFecha'     => $fecha, 
                                                            'dataTramites'  => $tramites, 
                                                            'tipoTramite'   => $tipo_tramite_id]);
    }

    public function historial_turnos(Request $request)
    {
        $tramites = User::getPermission();
        $ayer = Carbon::yesterday()->toDateString();
        if ($tramites->count() == 1) 
        {
            $oficina_id = Auth::User()->oficina_id;
            $oficina = Oficina::findOrFail($oficina_id);    
        } 
        else
        {
            $oficina_id = Oficina::getOficina(Auth::User()->oficina->delegacion_id, $tramites->first()['id'])->id;
            $oficina = Oficina::findOrFail($oficina_id);
        }
		$turnos = Collect([]);
        $abogadosInternos = Persona::abogadosInternos();
        $tipo_tramite_id = $oficina->tipo_tramite_id;
        if ($request->tipo_tramite_id != null) 
        {
            $delegacion_id = Auth::User()->oficina->delegacion_id;
            $tipo_tramite_id = $request->tipo_tramite_id;
            $oficina = Oficina::getOficina($delegacion_id, $tipo_tramite_id);           
            $turnos = $oficina->turnos_by_date($request->fecha, $request->fecha2);
            return Inertia::render('TurnosRegistrado/HistorialTurnos', ['dataAbogados'  => $abogadosInternos,
                                                                        'dataTurnos'    => $turnos,
                                                                        'dataFecha'     => $ayer, 
                                                                        'dataTramites'  => $tramites, 
                                                                        'tipoTramite'   => $tipo_tramite_id]);
        } 
        return Inertia::render('TurnosRegistrado/HistorialTurnos', ['dataAbogados'  => $abogadosInternos,
                                                                    'dataTurnos'    => $turnos,
                                                                    'dataFecha'     => $ayer, 
                                                                    'dataTramites'  => $tramites, 
                                                                    'tipoTramite'   => $tipo_tramite_id]);
    }

    public function historial_filtrar_turnos(Request $request)
    {
        $tramites = User::getPermission();
        $ayer = Carbon::yesterday()->toDateString();
        $delegacion_id = Auth::User()->oficina->delegacion_id;
        $oficina = Oficina::getOficina($delegacion_id, $request->tipo_tramite_id);
        $turnos = $oficina->turnos_by_date($request->fecha, $request->fecha2);
        $abogadosInternos = Persona::abogadosInternos();
        $tipo_tramite_id = $request->tipo_tramite_id;
        return Inertia::render('TurnosRegistrado/HistorialTurnos', ['dataAbogados'  => $abogadosInternos,
                                                                    'dataTurnos'    => $turnos,
                                                                    'dataFecha'     => $ayer, 
                                                                    'dataTramites'  => $tramites, 
                                                                    'tipoTramite'   => $tipo_tramite_id]);
    }

    public function cambiarEstado(Request $request)
    {
        $turno = Turno::findOrFail($request->id);
        $turno->estado = $request->estado;
        $turno->save();
        $abogadosInternos = Persona::abogadosInternos();
        $turnos = Turno::get_turnos_by_tramite($request->tipo_tramite_id);
        $tipo_tramite_id = $request->tipo_tramite_id;
        $tramites = User::getPermission();
        $hoy = Carbon::now();
        $fecha = Carbon::createFromFormat('Y-m-d', $hoy->toDateString())->format('d/m/Y');
        return Inertia::render('TurnosRegistrado/TurnosR', ['dataAbogados'  => $abogadosInternos,
                                                            'dataTurnos'    => $turnos,
                                                            'dataFecha'     => $fecha, 
                                                            'dataTramites'  => $tramites, 
                                                            'tipoTramite'   => $tipo_tramite_id]);
    }
    public function create()
    {
        //jaja nomas
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function buscador_turno(Request $request) //store proyecto viejo
    {
        if ($request->tipo_id != null) 
        {
            $turnos = Turno::get_turnos_by_tramite($request->tipo_id);
            $tipo_tramite_id = $request->tipo_id;
        }
        else 
        {
            $tipo_tramite_id = $request->tipo_tramite_id;
            $turno = Turno::findOrFail($request->id);
            $turno->estado = $request->estado;
            $turno->save();
            $turnos = Turno::get_turnos_by_tramite($request->tipo_tramite_id);
        }
        $abogadosInternos = Persona::abogadosInternos();
        $tramites = User::getPermission();
        $hoy = Carbon::now();
        $fecha = Carbon::createFromFormat('Y-m-d', $hoy->toDateString())->format('d/m/Y');
        return Inertia::render('TurnosRegistrado/TurnosR', ['dataAbogados'  => $abogadosInternos,
                                                            'dataTurnos'    => $turnos,
                                                            'dataFecha'     => $fecha, 
                                                            'dataTramites'  => $tramites, 
                                                            'tipoTramite'   => $tipo_tramite_id]);
    }
    
    public function comprobanteTurno(Request $request)
    {
        $turno = Turno::findOrFail($request->id);
        $pdf = PDF::loadView('pdfTurno',
        [
            'turno'=> $turno
        ]);
        return $pdf->inline('comprobante.pdf');
    }
    
    public function mostrarComprobante(Request $request)
    {
        $turno = Turno::findOrFail($request->id);
        return view('pdfTurno')->with(compact('turno'));
    }
    
    public function destroy(Request $request)
    {
        $turnoDelete = Turno::findOrFail($request->id);
        dispatch(new EnviaMailCancelacionTurno($request->id, $request->motivo));
        $turnoDelete->delete();
        return 'funciono';
    }

        /* 
    * Update que combina los metoods cambiar estado y asignar abogado.
    * Si el tipo de tramite es asesoramiento juridico asigna un abogado al turno.
    * Sino modifica el estado a Presente o Asente.
    */
    public function update(Request $request) // update_2 repositorio viejo
    {  
        if ($request->tipo_tramite_id == 1) 
        {
            $turno = Turno::findOrFail($request->turno_id);
            $abogado = Persona::findOrFail($request->abogado_id);
            $turno->abogado_id = $abogado->id;
            $turno->posee_abogado = true;      
            $turno->save();   
            return redirect()->action([TurnoController::class, 'index'],
                                      ['tipo_tramite_id'=>$request->tipo_tramite_id]);
        }
        else 
        {
            $turno = Turno::findOrFail($request->id);
            $turno->estado = $request->estado;
            $turno->save();
            return redirect()->action([TurnoController::class, 'index'],
                                      ['tipo_tramite_id'=>$request->tipo_tramite_id]);
        }
    }

    public function estadoConciliacion(Request $request)
    {
        /*$request = new Request;
        $request->conciliacion_positiva = 'on';
        $request->id = 2;*/
        $turno = Turno::findOrFail($request->id);
        if ($request->conciliacion_positiva == on)
        {
            $turno->conciliacion_positiva = 1;
        }
        else
        {
            $turno->conciliacion_positiva = 0;
        }
        $turno->save();
        return 'Estado de conciliacion modificado';
    }

        /**
    * Verifica si el dni ya existe en la tabla personas. Si existe retorna los datos del mismo;
    * Si no existe retorna falso;
    * $this->verifica_si_existe(10946234);
    *
    */
    public function verifica_si_existe(Request $request)    
    {        
        $consulta = Persona::all()->where('dni', $request->dni);
        if ($consulta->isEmpty()) 
        {
            return false;
        }
        else
        {
            return $consulta->first()->datosPersona();
        }             
    }

        /**
    * Obtiene los turnos que han sido cancelado de un tipo de tramite y delegacion
    *
    */
    public function turnos_cancelados(Request $request)
    {
        // $request = new Request;
        // $request->tipo_tramite_id = 1;
        $delegacion_id = Auth::User()->oficina->delegacion_id;
        $getOficina = Oficina::getOficina($delegacion_id, $request->tipo_tramite_id);
        Turno::turnos_cancelados($getOficina->id);
        return 'vista que corresponda';
    }
}
