<?php

namespace App\Http\Requests\ManttoEmpresa;

use Illuminate\Foundation\Http\FormRequest;

class DetalleRequest extends FormRequest
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
            'titulo' => 'required|max:100',
            'descripcion' => 'required',
            'numero_plaza' => 'required|min:0',
            'cod_contrato' => 'required',
            'cod_a_experiencia' => 'required',
            'cod_genero' => 'required',
            'edad_min' => 'required|min:0',
            'edad_max' => 'required|min:0',
            'salario_min' => 'required|min:0',
            'salario_max' => 'required|min:0',
            'vehiculo' => 'required',
            'cod_licencia' => 'required',
        ];
    }
}
