<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorRegistroCliente extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|email|unique:clientes,correo',
            'telefono' => 'required|regex:/^[0-9]{10}$/',
            'contraseña' => 'required|min:8|regex:/^(?=.*[a-zA-Z])(?=.*\d).+$/',
        ];
    }
}
