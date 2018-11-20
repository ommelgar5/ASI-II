<?php

namespace App\Http\Requests\ManttoUser;

use Illuminate\Foundation\Http\FormRequest;

class HabilidadResquest extends FormRequest
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
            'cod_programa' => 'required',
            'cod_nivel' => 'required',
        ];
    }
}
