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
        $patients = Patient::paginate(10);
        $patientsInactifs = Patient::where("statutPatient", "inactif")->get();
        return view('patient.listpatient',["allpatients" => $patients, "allpatientsInactifs" => $patientsInactifs, "filtre" => null]);
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

    
    public function updatepatient(Patient $patient, UpdatePatientRequest $request) {
        $newEmailExists = Patient::where('courrielPatient', 'LIKE', strtolower($request->courrielPatient))
            ->where('idPatient', '!=', $patient->idPatient)
            ->exists();
    
        $newNAMExists = Patient::where('NumeroAssMalPatient', 'LIKE', strtolower($request->NumeroAssMalPatient))
            ->where('idPatient', '!=', $patient->idPatient)
            ->exists();
    
        if ($newEmailExists) {
            return redirect()->back()->with('error', 'Le courriel existe dans notre système');
        }
    
        if ($newNAMExists) {
            return redirect()->back()->with('error', 'Le numéro d\'assurance maladie du patient existe dans notre système');
        }
    
        try {
            $patient->update($request->all());
            return redirect()->back()->with('success', 'Mises à jour effectuées avec succès');
        } catch (Exception $e) {
            dd($e);
        }
    }
    
       /** Search */
    public function searchpatient(Request $request){
        if(!empty($request->numeroDossier)){
        $patients = Patient::where("numeroDossier", $request->nodossier)->paginate(1);
       if($patients != null){
        return view('patient.listpatient',["allpatients" => $patients, "allpatientsInactifs" => [], "filtre" => null]);
       }
    }
    else{
        $patients = Patient::paginate(10);
        $patientsInactifs = Patient::where("statutPatient", "inactif")->get();
        return view('patient.listpatient',["allpatients" => $patients, "allpatientsInactifs" => $patientsInactifs, "filtre" => null]);
    }
 }
    /** Filtre Liste patient */
    public function filtrepatient(Request $request){
        $filtre = $request->filtre;
        $patientsInactifs = Patient::where("statutPatient", "inactif")->get();
        if(strtolower($filtre) == "desc"){
            $patients = Patient::orderBy("nomPatient", 'desc')->paginate(10);           
        }
        elseif(strtolower($filtre) == "asc"){
            $patients = Patient::orderBy("nomPatient", 'asc')->paginate(10); 
        }
        elseif(strtolower($filtre) == "daterecent"){
            $patients = Patient::orderBy("created_at", 'desc')->paginate(10); 
        }
        else{
            $patients = Patient::paginate(10);
            $filtre = null;
        }
        return view('patient.listpatient',["allpatients" => $patients, "allpatientsInactifs" => $patientsInactifs, "filtre" => $filtre]);              
    }
    // public function searchmedecinbynumber(Request $request){
    //     dd($request);
    // }

    /** Patient Antecedent */
    public function patientantecedent(){
        return view("patient.patientantecedentmedical");
    }
}

