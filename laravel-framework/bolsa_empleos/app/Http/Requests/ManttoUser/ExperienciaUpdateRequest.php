<?php

namespace App\Http\Requests\ManttoUser;

use Illuminate\Foundation\Http\FormRequest;

class ExperienciaUpdateRequest extends FormRequest
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
            'cod_giro' => 'required',
            'cod_cargo' => 'required',
            'empresa' => 'required|max:150',
            'puesto' => 'required|max:200',
            'descripcion' => 'required|max:500',
            'a_inicio' => 'required',
        ];
    }
}
