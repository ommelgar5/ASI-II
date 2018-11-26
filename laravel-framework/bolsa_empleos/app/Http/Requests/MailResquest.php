<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailResquest extends FormRequest
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
            'name'=>'required|max:100',
            'email'=> 'required|email',
            'message'=>'required|max:500',
        ];
    }
}
