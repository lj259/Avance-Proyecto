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
            'numero_vuelo' => 'required|numeric',
            'origen' => 'required|in:CDMX,GDL,MTY,CUN,PVR,BJX,SJD',
            'destino' => 'required|in:CDMX,GDL,MTY,CUN,PVR,BJX,SJD|different:origen',
            'fecha_salida' => 'required|date|after_or_equal:today',
            'tarifa' => 'required|numeric|min:1'
        ];
    }
}
