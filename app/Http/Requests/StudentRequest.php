<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name_student'=>'bail',
            //'apellidos'=>'bail|required|alpha',
            //'matricula' => 'bail|required|numeric',
            //'cumpleanios'=>'bail|required|date',
            //'correo' => 'bail|required|email',
            //'contraseña' => 'bail|required|between:4,10'
        ];
    }
}
