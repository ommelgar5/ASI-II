<?php

namespace App\Http\Requests\ManttoUser;

use Illuminate\Foundation\Http\FormRequest;

class EstudioResquest extends FormRequest
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
            'cod_nivel_est'=> 'required',
            'cod_area_est'=> 'required',
            'especialidad'=> 'required|max:300',
            'a_inicio'=> 'required',
            'nombre_institucion'=> 'required|max:100',
        ];
    }
}
