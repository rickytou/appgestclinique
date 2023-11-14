<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperPatientsAntecedentsMedicaux
 */
class PatientsAntecedentsMedicaux extends Model
{
    use HasFactory;

    private $guarded = [];

    protected $table = 'patients_antecedents_medicauxes';

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'identifiantPatient');
    }

    public function antecedentsMedicaux()
    {
        return $this->belongsTo(AntecedentMedical::class, 'idAntecedentsMedicaux');
    }
}
