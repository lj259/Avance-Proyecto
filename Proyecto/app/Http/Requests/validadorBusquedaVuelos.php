<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorBusquedaVuelos extends FormRequest
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
            'origin' => 'required|in:CDMX,GDL,MTY,CUN,PVR,BJX,SJD',
            'destination' => 'required|in:CDMX,GDL,MTY,CUN,PVR,BJX,SJD|different:origin',
            'departureDate' => 'required|date|after_or_equal:today',
            'returnDate' => 'nullable|date|after:departureDate',
            'passengers' => 'required|integer|min:1|max:6',
            'class' => 'required|in:economy,business,first',
        ];
    }
}
