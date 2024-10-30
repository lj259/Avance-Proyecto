<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorRegistro extends FormRequest
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
            'txtnombre' => 'required|min:7|max:20',
            'txtapellido' => 'required|min:7|max:20',
            'txttelefono' => 'required|numeric',
            'txtcorreo' => 'email:rfc:dns'
        ];
    }
}
