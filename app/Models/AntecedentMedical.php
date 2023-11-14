<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperAntecedentMedical
 */
class AntecedentMedical extends Model
{
    //use HasFactory;
    protected $table = 'antecedent_medicals';

    public function patients()
    {
        return $this->belongsToMany(Patient::class, 'PatientsAntecedentsMedicaux', 'idAntecedentsMedicaux', 'identifiantPatient')
            ->withPivot('dateDiagnostics', 'description')
            ->withTimestamps();
    }
}
