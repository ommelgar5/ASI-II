<?php

namespace App\Http\Requests\ManttoEmpresa;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
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
        'nombre_comercial' => 'required|max:200',
        'nombre_juridico' => 'required|max:200',
        'descripcion' => 'required|max:1000',
        'correo' => 'required|email',
        'telefono1' => 'required|min:8|max:8',
        'telefono2' => 'required|min:8|max:8',
        'cod_giro' => 'required',
        ];
    }
}
