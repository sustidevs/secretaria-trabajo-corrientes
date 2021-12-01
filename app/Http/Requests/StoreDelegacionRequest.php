<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDelegacionRequest extends FormRequest
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
        return [
            'telefono' => 'required|string|max:15',
            'correo' => 'required|email',
            'direccion' => 'required|string|max:255',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'telefono.required' => 'Debe ingresar un Telefono.',
            'telefono.string' => 'El telefono debe ser una cadena de caracteres.',
            'telefono.max' => 'Numero de Telefono demasiado largo.',
            'correo.required' => 'Debe ingresar un correo electronico.',
            'correo.email' => 'Debe ingresar un correo valido.',
            'direccion.required' => 'Debe ingresar una direccion.',
            'dirreccion.string' => 'El dato ingresado no es valido.',
            'dirreccion.max' => 'La direccion es demasiado grande.',
        ];
    }
} 
