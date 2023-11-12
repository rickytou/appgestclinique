<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperMedecin
 */
class Medecin extends Model
{
    protected $primaryKey = 'idMedecin';

    use HasFactory;
 
        protected $fillable = [
            'nomMedecin', 'prenomMedecin', 'courrielMedecin', 'adresseMedecin', 'numeroLicence',
            'telephoneMedecin', 'affiliationsProfessionnelles', 'titresAcademiques', 'statutMedecin',
            // Ajoutez d'autres champs au besoin
        ];
    }

