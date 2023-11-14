<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperPatient
 */
class Patient extends Model
{
    protected $primaryKey = 'idPatient';
    //use HasFactory;
    protected $table = 'patients';

    protected $guarded = [
        "statutPatient","groupSanguin","numeroDossier"
    ];

    public function antecedentmedical(){
        return $this->belongsToMany(AntecedentMedical::class, 'PatientsAntecedentsMedicaux', 'identifiantPatient', 'idAntecedentsMedicaux')
        ->withPivot('dateDiagnostics', 'description')
        ->withTimestamps();
    }
}
