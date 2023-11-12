<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMedecinRequest extends FormRequest
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
            'nomMedecin' => 'required|string|max:50',
            'prenomMedecin' => 'required|string|max:50',
            'courrielMedecin' => 'required|email|max:30',
            'numeroLicence' => 'required|string|max:30',
            'adresseMedecin' => 'required|string|max:255',
            'telephoneMedecin' => 'required|string|regex:/^[0-9]{10}$/',
            'affiliationsProfessionnelles' => 'nullable|string',
            'titresAcademiques' => 'required|string'
        ];
    }
   public function messages():array {
    return [
        'nomMedecin.required' => 'Le nom du médecin est obligatoire.',
        'nomMedecin.string' => 'Le nom du médecin doit être une chaîne de caractères.',
        'nomMedecin.max' => 'Le nom du médecin ne doit pas dépasser 50 caractères.',
        'prenomMedecin.required' => 'Le prénom du médecin est obligatoire.',
        'prenomMedecin.string' => 'Le prénom du médecin doit être une chaîne de caractères.',
        'prenomMedecin.max' => 'Le prénom du médecin ne doit pas dépasser 50 caractères.',
        'courrielMedecin.required' => 'Le courriel du médecin est obligatoire.',
        'courrielMedecin.email' => 'L\'adresse email est invalide.',
        'courrielMedecin.max' => 'Le courriel du médecin ne doit pas dépasser 30 caractères.',
        'numeroLicence.required' => 'Le numéro de licence du médecin est obligatoire.',
        'numeroLicence.string' => 'Le numéro de licence du médecin doit être une chaîne de caractères.',
        'numeroLicence.max' => 'Le numéro de licence du médecin ne doit pas dépasser 30 caractères.',
        'adresseMedecin.required' => 'L\'adresse du médecin est obligatoire.',
        'adresseMedecin.string' => 'L\'adresse du médecin doit être une chaîne de caractères.',
        'adresseMedecin.max' => 'L\'adresse du médecin ne doit pas dépasser 255 caractères.',
        'telephoneMedecin.required' => 'Le téléphone du médecin est obligatoire.',
        'telephoneMedecin.string' => 'Le téléphone du médecin doit être une chaine de caracteres.',
        "telephoneMedecin.regex" => "Le numéro de téléphone du médecin doit contenir exactement 10 chiffres.",
        'titresAcademiques.required' => 'Les titres académiques du médecin est obligatoire.',
        'titresAcademiques.string' => 'Le titre académique du médecin doivent être une chaîne de caractères.',
        'affiliationsProfessionnelles.string' => 'L\'affiliation professionnelle doit etre une chaine de caractere',
    ];
   }
}
