<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class agregarVuelo extends FormRequest
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
        'aerolinea' => 'required|string|max:150',
        'num_vuelo' => 'required|string|max:10|unique:vuelos,num_vuelo',
        'origen' => 'required|string|max:150',
        'destino' => 'required|string|max:150',
        'fecha_salida' => 'required|date',
        'fecha_llegada' => 'required|date',
        'hora_salida' => 'required|date_format:H:i',
        'hora_llegada' => 'required|date_format:H:i',
        'max_pasajeros' => 'required|integer|min:1',
        
        'precio' => 'required|integer|min:1',
        'escalas.*.destino' => 'nullable|string|max:150',
        'escalas.*.hora_salida' => 'nullable|date_format:H:i|min:0|max:2359',
        'escalas.*.hora_llegada' => 'nullable|date_format:H:i|min:0|max:2359',
        ];
    }
}
