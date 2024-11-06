<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarTarjeta extends FormRequest
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
            'cardNumber' => 'required|numeric',
            'expiryDate' => ['required',
             function ($attribute, $value, $fail) {
                // Verificar el formato MM/AA con una expresión regular
                if (!preg_match('/^(0[1-9]|1[0-2])\/\d{2}$/', $value)) {
                    $fail('La fecha de expiración debe tener el formato MM/AA.');
                }
            }
        ],
            'cvv' => 'required|numeric|digits:3',
            'check' => 'required'
        ];
    }
}
