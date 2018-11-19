<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'nombre' => 'required|max:50',
            'apellido' => 'required|max:50',
            'cod_genero' => 'required',
            'fech_nac' => 'required',
            'telefono1' => 'required|min:8|max:8',
            'telefono2' => 'min:8|max:8',
            'cod_civil' => 'required',
            'cod_a_experiencia' => 'required',
            'vehiculo' => 'required',
            'cod_licencia' => 'required',
            'correo' => 'required|email',
        ];
    }
}
