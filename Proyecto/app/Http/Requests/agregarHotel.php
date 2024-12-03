<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class agregarHotel extends FormRequest
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
        'nombre' => 'required|string|max:150', 
        'habitaciones' => 'required|integer|min:1',
        'capacidad' => 'required|integer|min:1', 
        'precio' => 'required|numeric|min:0', 
        'calificacion' => 'nullable|numeric|min:0|max:5', 
        'ubicacion' => 'required|string|max:150', 
        'distancia' => 'nullable|numeric|min:0', 
        'turistico' => 'required|string|max:150', 
        'servicios' => 'nullable|string|max:150', 
        ];
    }
}
