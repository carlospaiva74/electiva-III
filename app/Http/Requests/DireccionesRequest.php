<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DireccionesRequest extends FormRequest
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
            'nombre'             => 'required|string|max:60',
            'telefono'           => 'required|numeric',
            'estado'             => 'required|numeric|min:1',
            'municipio'          => 'required|numeric|min:1',
            'parroquia'          => 'required|numeric|min:1',
            'direccion'          => 'required|string:max:255',
        ];
    }
}
