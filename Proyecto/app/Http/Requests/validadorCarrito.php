<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorCarrito extends FormRequest
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
            'numPasajeros' => 'required|integer|min:1',
            'numNoches' => 'required|integer|min:1',
        ];
    }
}
