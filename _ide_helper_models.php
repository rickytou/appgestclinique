<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\AntecedentMedical
 *
 * @property int $idAntecedentsMedicaux
 * @property string $nomAntecedentMedical
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AntecedentMedical newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AntecedentMedical newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AntecedentMedical query()
 * @method static \Illuminate\Database\Eloquent\Builder|AntecedentMedical whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AntecedentMedical whereIdAntecedentsMedicaux($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AntecedentMedical whereNomAntecedentMedical($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AntecedentMedical whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperAntecedentMedical {}
}

namespace App\Models{
/**
 * App\Models\Conge
 *
 * @property int $identifiantMedecin
 * @property string $motifConge
 * @property string|null $note
 * @property string $dateDebut
 * @property string $dateFin
 * @property string $statutConge
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Conge newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Conge newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Conge query()
 * @method static \Illuminate\Database\Eloquent\Builder|Conge whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conge whereDateDebut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conge whereDateFin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conge whereIdentifiantMedecin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conge whereMotifConge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conge whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conge whereStatutConge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Conge whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperConge {}
}

namespace App\Models{
/**
 * App\Models\Disponibilite
 *
 * @property int $identifiantMedecin
 * @property string $jourSemaine
 * @property string $heureDebut
 * @property string $heureFin
 * @property string $statut
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Disponibilite newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Disponibilite newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Disponibilite query()
 * @method static \Illuminate\Database\Eloquent\Builder|Disponibilite whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Disponibilite whereHeureDebut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Disponibilite whereHeureFin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Disponibilite whereIdentifiantMedecin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Disponibilite whereJourSemaine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Disponibilite whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Disponibilite whereStatut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Disponibilite whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperDisponibilite {}
}

namespace App\Models{
/**
 * App\Models\Medecin
 *
 * @property int $idMedecin
 * @property string $nomMedecin
 * @property string $prenomMedecin
 * @property string $courrielMedecin
 * @property string $numeroLicence
 * @property string $adresseMedecin
 * @property string $telephoneMedecin
 * @property string $statutMedecin
 * @property string $photo
 * @property string $specialite
 * @property string|null $affiliationsProfessionnelles
 * @property string $titresAcademiques
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereAdresseMedecin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereAffiliationsProfessionnelles($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereCourrielMedecin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereIdMedecin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereNomMedecin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereNumeroLicence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin wherePrenomMedecin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereSpecialite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereStatutMedecin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereTelephoneMedecin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereTitresAcademiques($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperMedecin {}
}

namespace App\Models{
/**
 * App\Models\Patient
 *
 * @property int $idPatient
 * @property string $numeroDossier
 * @property string $nomPatient
 * @property string $prenomPatient
 * @property string|null $courrielPatient
 * @property string $sexePatient
 * @property string $adressePatient
 * @property string $telephonePatient
 * @property string $NumeroAssMalPatient
 * @property string $groupSanguin
 * @property string $statutPatient
 * @property string|null $noteDossier
 * @property string $dateNaissancePatient
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Patient newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient query()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereAdressePatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereCourrielPatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereDateNaissancePatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereGroupSanguin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereIdPatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereNomPatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereNoteDossier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereNumeroAssMalPatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereNumeroDossier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient wherePrenomPatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereSexePatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereStatutPatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereTelephonePatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperPatient {}
}

namespace App\Models{
/**
 * App\Models\PatientsAntecedentsMedicaux
 *
 * @property int $identifiantPatient
 * @property int $idAntecedentsMedicaux
 * @property string|null $dateDiagnostics
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PatientsAntecedentsMedicaux newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PatientsAntecedentsMedicaux newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PatientsAntecedentsMedicaux query()
 * @method static \Illuminate\Database\Eloquent\Builder|PatientsAntecedentsMedicaux whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PatientsAntecedentsMedicaux whereDateDiagnostics($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PatientsAntecedentsMedicaux whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PatientsAntecedentsMedicaux whereIdAntecedentsMedicaux($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PatientsAntecedentsMedicaux whereIdentifiantPatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PatientsAntecedentsMedicaux whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperPatientsAntecedentsMedicaux {}
}

namespace App\Models{
/**
 * App\Models\RendezVous
 *
 * @property int $idPatient
 * @property int $idMedecin
 * @property string $dateRendezVous
 * @property string $heureRendezVous
 * @property string $statutRendezVous
 * @property string $motifRendezVous
 * @property string|null $noteRendezVous
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous query()
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereDateRendezVous($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereHeureRendezVous($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereIdMedecin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereIdPatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereMotifRendezVous($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereNoteRendezVous($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereStatutRendezVous($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RendezVous whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperRendezVous {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperUser {}
}

