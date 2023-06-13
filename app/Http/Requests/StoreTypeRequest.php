<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTypeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => "required|min:3"
        ];
    }

    public function messages(){
        return [
            'nome.required' => "Il campo è obbligatorio",
            'nome.min' => "Il campo deve contenere almeno 3 caratteri"
        ];
    }
}
