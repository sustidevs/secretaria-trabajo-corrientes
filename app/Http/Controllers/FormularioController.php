<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Inertia\Inertia;
use App\Models\Turno;
use App\Models\Oficina;
use App\Models\Persona;
use App\Models\Localidad;
use App\Models\Delegacion;
use Illuminate\Support\Str;
use App\Models\TiposTramite;
use Illuminate\Http\Request;
use PDF;

class FormularioController extends Controller
{
    public function createForm()
    {
        $delegaciones= Delegacion::localidadesDireccion();
        $localidades = Localidad::All()->except(['26']);
        $tiposTramites = TiposTramite::All()->except(['1']);

        return Inertia::render('Formulario',
        [
            'dataDelegaciones'  => $delegaciones,
            'dataLocalidades'   => $localidades,
            'dataTramites'      => $tiposTramites
        ]);
    }

    public function createFormA()
    {
        $delegaciones= Delegacion::localidadesDireccion();
        $localidades = Localidad::All()->except(['26']);
        $tiposTramites = TiposTramite::All()->except(['1']);

        
        $fechasDisponibles = Oficina::findOrFail($oficina->id)->array_fechas_horarios(); 

        return Inertia::render('FormularioAJuridico',
        [
            'dataDelegaciones'  => $delegaciones,
            'dataLocalidades'   => $localidades,
            'dataTramites'      => $tiposTramites
        ]);
    }

    public function storeDatos(Request $request)
    {
        
        $persona = Persona::si_existe($request->dni);

        if ($persona == null ) {
            $datosPersona = new Persona();
            $datosPersona->dni = $request->dni;  
        } 
        else {
            $datosPersona = $persona; 
        }

        $datosPersona->nombre = $request->nombre;
        $datosPersona->apellido = $request->apellido;
        $datosPersona->telefono = $request->telefono;
        $datosPersona->domicilio = $request->domicilio;            
        $datosPersona->localidad_id = $request->localidad;
        $datosPersona->correo = $request->correo;
        $datosPersona->tipo = 7;
        $datosPersona->save();
        
        if ($request->posee_abogado == true)
        {
            $abogado = Persona::si_existe($request->dnip);
            if ($abogado == null ) {
                $datosAbogado = new Persona();
                $datosAbogado->dni = $request->dnip;  
            } 
            else {
                $datosAbogado = $abogado; 
            }
            
            $datosAbogado->nombre = $request->nombrep;
            $datosAbogado->apellido = $request->apellidop;
            $datosAbogado->telefono = $request->telefonop;
            $datosAbogado->domicilio = $request->domiciliop;
            $datosAbogado->localidad_id = $request->localidadp;
            $datosAbogado->correo = $request->correop;
            $datosAbogado->tipo = 6;
            $datosAbogado->save();
            $dataAbogado =  $datosAbogado->datosPersona(); 
            $tipoTramite = $request->tipos_tramite_id;
            $delegacion= 3;
            $oficina = Oficina::getOficina($delegacion, $tipoTramite);   
        }
        else{
            $dataAbogado = Collect([]);
            $tipoTramite = 1;
            $delegacion= 3;
            $oficina = Oficina::getOficina($delegacion, $tipoTramite);  
        }
                
        $fechasDisponibles = Oficina::findOrFail($oficina->id)->array_fechas_horarios(); 
        $dataTurno = Collect([]);

        /* Pregunta si el solicitante ya tiene un turno pendiente para ese tramite */
        
        $verifica_turno = Turno::verifica_si_existe($datosPersona->id,$oficina->id);
        if ($verifica_turno->count() > 1) {
            $dataTurno = $verifica_turno->first()->datosTurno();
           dd ($dataTurno);
            return Inertia::render('Formulario', 
            [   
                                'oficina_id' => $oficina->id,
                                'delegacion' => $delegacion,
                                'tipoTramite' => $tipoTramite,
                                'dataFechas' => $fechasDisponibles, 
                                'dataSolicitante' => $datosPersona->datosPersona(),
                                'dataAbogado' => $dataAbogado,
                                'dataTurno' => $dataTurno,
                                'verifica_turno' => true,
            ]);
        } 
        else {
            return Inertia::render('ElegirFecha', 
            [   
                                'oficina_id' => $oficina->id,
                                'delegacion' => $delegacion,
                                'tipoTramite' => $tipoTramite,
                                'dataFechas' => $fechasDisponibles, 
                                'dataSolicitante' => $datosPersona->datosPersona(),
                                'dataAbogado' => $dataAbogado,
                                'dataTurno' => $dataTurno,
                                'verifica_turno' => false,
                                
            ]);
        }  
    }

    public function storeTurnos(Request $request)
    {
            /*ELIMINAR DE LA VISTA SI NO SE UTILIZAN */
            $datosPersona = Collect([]);
            $dataAbogado = Collect([]);
            /*ELIMINAR DE LA VISTA SI NO SE UTILIZAN */
            $delegacion = Collect([]);
            $fechasDisponibles = Collect([]);
            $tipoTramite = Collect([]);
            $fecha = Carbon::createFromFormat('d/m/Y', $request->fecha)->format('Y-m-d');

            $turno = new Turno();
            $turno->oficina_id = $request->oficina_id;
            $oficina = Oficina::findOrFail($request->oficina_id);
            $turno->abogado_id = 3; 
            //Si abogado_id == null, el tramite es asesoramiento juridoco ya que No posee abogado
            if ($request->abogado_id == null){
                $turno->posee_abogado = false;
                $turno->abogado_id = 3; //hace referecia a un solicitante sin abogado
                $turno->motivo = $oficina->tipos_tramite_id;
            }
            else{
                $turno->posee_abogado = true;
                $turno->abogado_id = $request->abogado_id;
            }
            $turno->user_id = 1;
            $turno->solicitante_id = $request->solicitante_id;
            $turno->fecha = $fecha; 
            $turno->hora = $request->hora;
            $turno->conciliacion_positiva = true; //$request->conciliacion_positiva;
            $turno->estado = 0;
            $turno->save();
           //* Session::forget('url_previa');
            /**dispatch(new EnviaMailConfirmacionJob($turno));**/
            return Inertia::render('ElegirFecha', 
                [
                                        'guardo' => true,
                                        'oficina_id' => $oficina->id,
                                        'delegacion' => $delegacion,
                                        'tipoTramite' => $tipoTramite,
                                        'dataFechas' => $fechasDisponibles, 
                                        'dataSolicitante' => $datosPersona,
                                        'dataAbogado' => $dataAbogado,
                                        'dataTurno' => $turno->datosTurno(),
                                        'verifica_turno' => false,
                ]);  
    }
    
    public function show(Request $request)
    {
        $turno = Turno::findOrFail($request->id);
        return $turno;
    }
    
    public function comprobanteTurno(Request $request)  //TODO verificar despues con datos cargados
    {
        $turno = Turno::findOrFail($request->id);
        $pdf = PDF::loadView('pdfTurno',
        [
            'turno'=> $turno
        ]);
        return $pdf->inline('pdfTurno.pdf');
    }
}
