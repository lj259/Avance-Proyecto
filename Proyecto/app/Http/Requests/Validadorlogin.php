<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validadorlogin extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'txtnombre' => 'required|string|min:8|max:20',
            'txtapellido' => 'required|min:8|max:20',
            'txtcorreo' => 'email:rfc:dns',
            'txtcontraseña' => 'required|min:8'
        ];
    }
}
