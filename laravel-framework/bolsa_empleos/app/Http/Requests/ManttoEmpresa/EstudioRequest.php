<?php

namespace App\Http\Requests\ManttoEmpresa;

use Illuminate\Foundation\Http\FormRequest;

class EstudioRequest extends FormRequest
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
            'cod_oferta'=> 'required',
            'cod_nivel_est'=> 'required',
        ];
    }
}
