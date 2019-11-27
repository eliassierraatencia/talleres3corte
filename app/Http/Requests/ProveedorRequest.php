<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProveedorRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'nombre' => 'required|min:3|max:255',
            'direccion' => 'required|min:3',
            'telefono' => 'required|integer'
        ];
    }

    public function attributes()
    {
        return [
            'nombre' => 'Nombre Completo',
            'direccion' => 'Direccion',
            'telefono' => 'Numero Contacto',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El atributo :attribute es requerido.',
            'max' => 'El atributo :attribute debe tener maximo :max caracteres.',
            'min' =>  'El atributo :attribute debe tener como minimo :min caracteres.',
            'integer' => 'El atributo :attribute debe ser númerico.',
        ];
    }


}
