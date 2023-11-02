<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function formAddPatient(){
        return view("patient.addpatient");
    }
    public function savePatient(Request $request){
        $patient = new Patient();
       $patient->nompatient = $request->input("nompatient");
       $patient->prenompatient = $request->input("prenompatient");
       $patient->numeroDossier = "numdossier02";
       $patient->sexePatient = $request->input("sexePatient");
       $patient->courrielPatient = $request->input("courrielPatient");
       $patient->adressepatient = $request->input("adressepatient");
       $patient->telephonepatient = $request->input("telephonepatient");
       $patient->NumeroAssMalPatient = $request->input("numassmalpatient");
       $patient->groupSanguin = $request->input("groupsanguin");
       $patient->noteDossier = $request->input("notedossier");
       $patient->statutPatient = $request->input("statutPatient");
       $patient->dateNaissancePatient  = $request->input("dateNaissancePatient");
        $patient->save();
    }
}

