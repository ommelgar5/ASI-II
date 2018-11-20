<?php

namespace App\Http\Requests\ManttoUser;

use Illuminate\Foundation\Http\FormRequest;

class IdiomaResquest extends FormRequest
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
            'cod_idioma'=> 'required',
            'cod_nivel' => 'required',
        ];
    }
}
