<?php

namespace App\Http\Controllers;

use App\Http\Requests\AntecedentMedicalRequest;
use App\Models\AntecedentMedical;
use Illuminate\Http\Request;

class AntecedentMedicalController extends Controller
{
    public function formAddAntecedentMedical(){
        $allAntecedents = AntecedentMedical::all();
        return view("antecedentmedical.addantecedentmedical", ["allAntecedents" => $allAntecedents]);
    }
    /**
     * Fonction permettant d'ajouter un antecedent medical
     */
    public function saveAntecedentMedical(AntecedentMedicalRequest $request){
        $validatedData = $request;
        if($validatedData) {
        $antecedentmedical = new AntecedentMedical();
        $antecedentmedical->nomAntecedentMedical = $request->input("nomAntecedentMedical");
        if($antecedentmedical->save()){
            // Passez un message flash de succès
            return redirect()->route("antecedentmedical.show")->with( ["success" => "Antecedent medical enregistre avec succes"]);
        }
    }
    else{
        return redirect()->back();
    }
    }
}
