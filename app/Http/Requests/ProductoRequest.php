<?php

namespace App\Http\Requests;

use App\Rules\CampoMayuscula;
use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'descripcion' => 'required|min:5|string',
            'precio' => 'required|min:3|integer',
            'proveedor_id' => 'required|integer',
            'categoria' => ['required','min:3', new CampoMayuscula]
        ];
    }

    public function attributes()
    {
        return [
            'descripcion' => 'Descripcion',
            'precio' => 'Precio Unitario',
            'proveedor_id' => 'Codigo Proveedor',
            'categoria' => 'Categoria'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El atributo :attribute es requerido.',
            'max' => 'El atributo :attribute debe tener maximo :max caracteres.',
            'min' =>  'El atributo :attribute debe tener como minimo :min caracteres.',
            'integer' => 'El atributo :attribute debe ser númerico.',
            'string' => 'El atributo :attribute debe ser un texto.',
        ];
    }
}
