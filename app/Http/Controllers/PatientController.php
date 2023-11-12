<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Models\Patient;
use Illuminate\Http\Request;
use Exception;

class PatientController extends Controller
{
    public function formAddPatient(){
        return view("patient.addpatient");
    }

    /** Patient Antecedent Medical */
    
    public function generateDossier(String $nom, String $prenom) : String{
        $max = Patient::max("idPatient");
        if($max == null){
            $max = 0;
        }
        $numeroDossier = substr($nom,0,2)."".substr($prenom,0,3)."00-".$max;
        return $numeroDossier;
    }

    /** Methode pour enregistrer les patients */
    public function savePatient(PatientRequest $request){
        $validatedData = $request;
        if($validatedData) {
            $patient = new Patient();
            $patient->nomPatient = trim($request->input("nompatient"));
            $patient->prenomPatient = trim($request->input("prenompatient"));
            $patient->numeroDossier =$this->generateDossier(trim($request->input("nompatient")), trim($request->input("prenompatient")));       
            $patient->sexePatient = $request->input("sexePatient");
            $patient->courrielPatient = trim($request->input("courrielPatient"));
            $patient->adressePatient = trim($request->input("adressePatient"));
            $patient->telephonePatient = trim($request->input("telephonePatient"));
            $patient->NumeroAssMalPatient = trim($request->input("NumeroAssMalPatient"));
            $patient->groupSanguin = $request->input("groupsanguin");
            $patient->noteDossier = trim($request->input("notedossier"));
            $patient->dateNaissancePatient  = $request->input("dateNaissancePatient");
            if($patient->save()){
                // Passez un message flash de succès
                return redirect()->route('patient.show')->with('success', 'Patient enregistré avec succès');
            }
    }
    else{
        return redirect()->back();
    }
}
    /**
     * Fonction permettant de lister tous les patients
     */
    public function listPatient(){
        $patients = Patient::paginate(4);
        $patientsInactifs = Patient::where("statutPatient", "inactif")->get();
        return view('patient.listpatient',["allpatients" => $patients, "allpatientsInactifs" => $patientsInactifs]);
    }

    /** Details de patient */
    public function detailspatient(int $id){
        $findPatient = Patient::where("idPatient", $id)->first();
        return view("patient.detailspatient", compact("findPatient"));
    }

    /** Edit un patient */
    public function editpatient(Patient $patient){
        return view("patient.editpatient", compact("patient"));
    }

    /** Update */
    public function updatepatient(Patient $patient, UpdatePatientRequest $request){
        
        try{
            $patient->update($request->all());
            return redirect()->back()->with('success', 'Mises a jour effectuees avec succes');
        }
        catch(Exception $e){
            dd($e);
        }
    }

}

