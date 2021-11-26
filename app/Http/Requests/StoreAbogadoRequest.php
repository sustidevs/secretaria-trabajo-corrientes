<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAbogadoRequest extends FormRequest
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
     *
     * @return array
     */
    public function rules()
    {
        return 
        [
            'dni' => 'required|integer|digits_between:7, 8|unique:App\Models\Persona,dni', 
            'nombre' => 'required|not_regex:/[0123456789]+/|max:255',
            'apellido' => 'required|not_regex:/[0123456789]+/|max:255',
            'telefono' => 'required|integer|digits_between:7, 15',
            'correo' => 'required|max:255|email|unique:App\Models\Persona,dni',
            'domicilio' => 'required|max:255|string',
            'localidad' => 'required',
        ];
    }

    public function messages()
    {
        return
        [
            'dni.required' => 'Debe completar este campo',
            'dni.integer' => 'Debe ingresar números',
            'dni.digits_between' => 'Debe ingresar un numero de 7 u 8 digitos',         
            'nombre.required' => 'Debe completar este campo',
            'nombre.not_regex' => 'Debe ingresar letras',            
            'apellido.required' => 'Debe completar este campo',
            'apellido.not_regex' => 'Debe ingresar letras',            
            'telefono.required' => 'Debe completar este campo',
            'telefono.integer' => 'Debe ingresar números',
            'telefono.digits_between' => 'Debe ingresar hasta 15 números',            
            'correo.required' => 'Debe completar este campo',
            'correo.email' => 'Ingrese un email válido',            
            'domicilio.required' => 'Debe completar este campo',
            'domicilio.max' => 'Maximo 50 caracteres',            
            'localidad.required' => 'Seleccione su localidad',
        ];
    }
}
