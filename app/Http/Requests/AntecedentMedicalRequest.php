<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AntecedentMedicalRequest extends FormRequest
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
            'nomAntecedentMedical' => 'required|min:3|max:50|unique:Antecedent_Medicals'
        ];
    }
    /* Message pour les differentes regles */
    public function messages()
{
    return [
        'nomAntecedentMedical.required' => 'Le champ Nom de l\'antécédent médical est requis.',
        'nomAntecedentMedical.min' => 'Le champ Nom de l\'antécédent médical doit contenir au moins :min caractères.',
        'nomAntecedentMedical.max' => 'Le champ Nom de l\'antécédent médical ne doit pas dépasser :max caractères.',
        'nomAntecedentMedical.unique' => 'Ce Nom de l\'antécédent médical est déjà utilisé. Veuillez en choisir un autre.'
    ];
}
}
