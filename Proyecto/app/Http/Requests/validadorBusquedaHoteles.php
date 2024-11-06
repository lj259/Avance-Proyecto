<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorBusquedaHoteles extends FormRequest
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
            'txtdestinacion' => 'required|string|max:255',
            'txtcheckin' => 'required|date|after_or_equal:today',
            'txtcheckout' => 'required|date|after:txtcheckin',
            'txthabitacion' => 'required|integer|min:1',
            'txtadultos' => 'required|integer|min:1',
            'txtniños' => 'required|integer|min:0'
        ];
    }
}
