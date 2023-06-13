<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'title' => 'required|max:100|min:3',
            'image' => 'required|max:255',
            'body' => 'required|min:3',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Il titolo è obbligatorio",
            'title.max' => "Il tittolo non deve superare 100 caratteri",
            'title.min' => "Il titolo deve contenere almano 3 caratteri",
            'image.required' => "Devi inserire la url di una immagine",
            'image.max' => "Massimo 255 caratteri",
            'body.required' => "lobbligatorio",
            'body.min' => "a descrizione deve avere minimo 3 caratteri",
        ];
    }
}
