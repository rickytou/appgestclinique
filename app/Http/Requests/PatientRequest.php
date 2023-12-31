<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
            'nompatient' => 'required|min:2|max:50',
            'prenompatient' => 'required|min:2|max:50',
            'courrielPatient' => 'min:3|max:30|email|unique:Patients,courrielPatient',
            'sexePatient' => 'required',
            'adressePatient' => 'required',
            'NumeroAssMalPatient' => ['required', 'regex:/^[a-zA-Z0-9]{12}$/', 'unique:Patients,NumeroAssMalPatient'],
            'telephonePatient' => 'required|string|regex:/^[0-9]{10}$/',
            "dateNaissancePatient" => [
                'required',
                'date', // Vérifie que la date est au bon format
                'before:' . Carbon::now()->format('Y-m-d'), // Vérifie que la date est antérieure à la date du jour
            ],

        ];
    }
    public function messages(){
        return [
            "nompatient.required" => "Le nom du patient est requis.",
            "nompatient.min" => "Le nom du patient doit contenir au moins :min caractères.",
            "nompatient.max" => "Le nom du patient ne peut pas dépasser :max caractères.",
            "prenompatient.required" => "Le prénom du patient est requis.",
            "prenompatient.min" => "Le prénom du patient doit contenir au moins :min caractères.",
            "prenompatient.max" => "Le prénom du patient ne peut pas dépasser :max caractères.",
            "courrielPatient.email" => "Le format de l'adresse email du patient est incorrect.",
            "courrielPatient.unique" => "L'adresse email du patient existe deja.",
            "courrielPatient.min" => "L'adresse email du patient doit avoir plus de 3 caractères.",
            "courrielPatient.max" => "L'adresse email ne peut pas dépasser :max caractères.",
            "sexePatient.required" => "Le sexe du patient est requis.",
            "NumeroAssMalPatient.required" => "Le numéro d'assurance maladie du patient est requis.",
            "NumeroAssMalPatient.regex" => "Le numéro d'assurance maladie du patient doit contenir 12 caractères alphanumériques.",
            "NumeroAssMalPatient.unique" => "Le numéro d'assurance maladie du patient doit être unique.",
            "adressePatient" => "L'adresse est requise",
            "telephonePatient.required" => "Le numéro de téléphone du patient est requis.",
            "telephonePatient.regex" => "Le numéro de téléphone du patient doit contenir exactement 10 chiffres.",
            'telephonePatient.string' => 'Le téléphone du patient doit être une chaine de caracteres.',
            "dateNaissancePatient.required" => "La date de naissance du patient est requise.",
            "dateNaissancePatient.date" => "Le format de la date de naissance est incorrect.",
            "dateNaissancePatient.before" => "La date de naissance du patient doit être antérieure à la date du jour."
        ];
    }
    
}
