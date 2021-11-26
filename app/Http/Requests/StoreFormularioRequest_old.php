<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormularioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
    * Get the validation rules that apply to the request.
    * alpha', //Solo ingresa letras incluidos caracteres especiales (tildes y ñ)
    * not_regex:/[0123456789]+/ <= acepta letras pero no numeros
    * regex:/[a-zA-ZÁáÉéÍíÓóÚúÑ ñ]+/ <= acepta letras numeros
    */
    public function rules()
    {
        if ($this->posee_abogado == true)
        {
            return 
            [
                'dni' => 'required|integer|digits_between:7, 8', 
                'nombre' => 'required|regex:/^[A-ZÁÀÂÇÉÈÊËÍÎÏÓÔÚÛÙÜŸÑÆŒa-záàâçéèêëíîïóôúûùüÿñæœ ]+$/|max:255',
                'apellido' => 'required|regex:/^[A-ZÁÀÂÇÉÈÊËÍÎÏÓÔÚÛÙÜŸÑÆŒa-záàâçéèêëíîïóôúûùüÿñæœ ]+$/|max:255',
                'telefono' => 'required|integer|digits_between:7, 15',
                'correo' => 'required|max:255|email|unique:App\Models\Persona,dni',
                'domicilio' => 'required|max:50|string',
                'localidad' => 'required',
                    
                'dnip' => 'required|integer|digits_between:7, 8', 
                'nombrep' => 'required|regex:/^[A-ZÁÀÂÇÉÈÊËÍÎÏÓÔÚÛÙÜŸÑÆŒa-záàâçéèêëíîïóôúûùüÿñæœ ]+$/|max:255',
                'apellidop' => 'required|regex:/^[A-ZÁÀÂÇÉÈÊËÍÎÏÓÔÚÛÙÜŸÑÆŒa-záàâçéèêëíîïóôúûùüÿñæœ ]+$/|max:255',
                'telefonop' => 'required|integer|digits_between:7, 15',
                'correop' => 'required|max:255|email|unique:App\Models\Persona,dni',
                'domiciliop' => 'required|max:50|string',
                'localidadp' => 'required',
                
                //'hora' => 'required',
                //'fecha' => 'required',
                'tipo_tramite_id' => 'required',
                'delegacion_id' => 'required',
            ];
        }
        else 
        {
            return 
            [
                'dni' => 'required|integer|digits_between:7, 8', 
                'nombre' => 'required|regex:/^[A-ZÁÀÂÇÉÈÊËÍÎÏÓÔÚÛÙÜŸÑÆŒa-záàâçéèêëíîïóôúûùüÿñæœ ]+$/|max:255',
                'apellido' => 'required|regex:/^[A-ZÁÀÂÇÉÈÊËÍÎÏÓÔÚÛÙÜŸÑÆŒa-záàâçéèêëíîïóôúûùüÿñæœ ]+$/|max:255',
                'telefono' => 'required|integer|digits_between:7, 15',
                'correo' => 'required|max:255|email|unique:App\Models\Persona,dni',
                'domicilio' => 'required|max:50|string',
                //'hora' => 'required',
                //'fecha' => 'required',
                'tipo_tramite_id' => 'required',
                'localidad' => 'required',
                'delegacion_id' => 'required',
            ];
        }
    }

    public function messages()
    {
        if ($this->posee_abogado == true)
        {
            return
            [
                //Datos reclamante
                'dni.required' => 'Debe completar este campo',
                'dni.integer' => 'Debe ingresar números',
                'dni.digits_between' => 'Debe ingresar un numero de 7 u 8 digitos',
                'nombre.required' => 'Debe completar este campo',
                'nombre.regex' => 'Debe ingresar letras',
                'apellido.required' => 'Debe completar este campo',
                'apellido.regex' => 'Debe ingresar letras',
                'telefono.required' => 'Debe completar este campo',
                'telefono.integer' => 'Debe ingresar números',
                'telefono.digits_between' => 'Debe ingresar entre 7 y 15 números',
                'correo.required' => 'Debe completar este campo',
                'correo.email' => 'Ingrese un email válido',
                'domicilio.required' => 'Debe completar este campo',
                'domicilio.max' => 'Maximo 50 caracteres',
                'localidad.required' => 'Seleccione su localidad',
                
                //Datos abogado
                'dnip.required' => 'Debe completar este campo',
                'dnip.integer' => 'Debe ingresar números',
                'dnip.digits_between' => 'Debe ingresar un numero de 7 u 8 digitos',
                'nombrep.required' => 'Debe completar este campo',
                'nombrep.regex' => 'Debe ingresar letras',
                'apellidop.required' => 'Debe completar este campo',
                'apellidop.regex' => 'Debe ingresar letras',
                'telefonop.required' => 'Debe completar este campo',
                'telefonop.integer' => 'Debe ingresar números',
                'telefonop.digits_between' => 'Debe ingresar entre 7 y 15 números',
                'correop.required' => 'Debe completar este campo',
                'correop.email' => 'Ingrese un email válido',
                'domiciliop.required' => 'Debe completar este campo',
                'domiciliop.max' => 'Maximo 50 caracteres',
                'localidadp.required' => 'Seleccione su localidad',

                //'fecha.required' => 'Debe seleccionar una fecha disponible',
                //'hora.required' => 'Debe seleccionar una hora disponible',
                'tipo_tramite_id.required' => 'Debe seleccionar un tipo de trámite',
                'delegacion_id.required' => 'Debe seleccionar una delegación',
            ];
        }
        else
        {
            return
            [
                'dni.required' => 'Debe completar este campo',
                'dni.integer' => 'Debe ingresar números',
                'dni.digits_between' => 'Debe ingresar un numero de 7 u 8 digitos',
                'nombre.required' => 'Debe completar este campo',
                'nombre.regex' => 'Debe ingresar letras',
                'apellido.required' => 'Debe completar este campo',
                'apellido.regex' => 'Debe ingresar letras',
                'telefono.required' => 'Debe completar este campo',
                'telefono.integer' => 'Debe ingresar números',
                'telefono.digits_between' => 'Debe ingresar entre 7 y 15 números',
                'correo.required' => 'Debe completar este campo',
                'correo.email' => 'Ingrese un email válido',
                'domicilio.required' => 'Debe completar este campo',
                'domicilio.max' => 'Maximo 50 caracteres',
                'localidad.required' => 'Seleccione su localidad',
                //'fecha.required' => 'Debe seleccionar una fecha disponible',
                //'hora.required' => 'Debe seleccionar una hora disponible',
                'tipo_tramite_id.required' => 'Debe seleccionar un motivo',
                'delegacion_id.required' => 'Debe seleccionar una delegación',
            ];            
        }
    }
}
