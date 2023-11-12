<?php

namespace App\Http\Controllers;


use App\Http\Requests\MedecinRequest;
use App\Http\Requests\UpdateMedecinRequest;
use App\Models\Medecin;
use Exception;

class MedecinController extends Controller
{
    
    public function viewmedecin(String $medecin){
        if($medecin == "jeanclaudecadet"){
            return view("medecins.jeanclaudecadet");
        }
        else if($medecin == "emmanuelcadet"){
            return view("medecins.emmanuelcadet");
        }
        else if($medecin == "valeriecadet"){
            return view("medecins.valeriecadet");
        }
        else if($medecin == "stephanecadet"){
            return view("medecins.stephanecadet");
        }
     
    }
    /*
    * Fonction permettant d'afficher le formulaire 
    */
    public function formAddMedecin(){
        return view("medecins.addmedecin");
    }

    /** Methode pour enregistrer un medecin */
    public function savemedecin(MedecinRequest $request){
        $validatedData = $request;
        if($validatedData){
            $ext = $request->photo->extension();
            $name = $request->nomMedecin .time().".".$ext;
           $path = $request->file('photo')->storeAs('medecins', $name, 'public');
            Medecin::create([
                'nomMedecin' => $request->nomMedecin,
                'prenomMedecin' => $request->prenomMedecin,
                'courrielMedecin' => $request->courrielMedecin,
                'adresseMedecin' => $request->adresseMedecin,
                'numeroLicence' => $request->numeroLicence,
                'telephoneMedecin' => $request->telephoneMedecin,
                'affiliationsProfessionnelles' => $request->affiliationsProfessionnelles,
                'photo' => $path,
                'titresAcademiques' => $request->titresAcademiques,
                'statutMedecin' => $request->statutMedecin
            ]);

            return redirect()->route('medecin.showmedecin')->with('success', 'Médecin enregistré avec succès');
        }
        else{
            return redirect()->back();
        }
    }

    /** Fonction pour lister les medecins */
    public function listMedecin(){
        $medecins = Medecin::paginate(4);
        $medecinsInactifs = Medecin::where("statutMedecin", "inactif")->get();
        return view('medecins.listmedecin',["allmedecins" => $medecins, "allmedecinsInactifs" => $medecinsInactifs]);
    }
    /** Affichage du profil du medecin */
    public function detailsmedecin(int $id){
        $findMedecin = Medecin::where("idMedecin", $id)->first();
        return view("medecins.detailsmedecin", compact("findMedecin"));
    }

    /** Search Medecin */
    public function searchMedecin(int $id){
        $findMedecin = Medecin::where("idMedecin",$id)->first();
        return $findMedecin;
    }

 
public function editmedecin(Medecin $medecin){
   return view("medecins.editmedecin", compact("medecin"));
}
  
    public function updatemedecin(Medecin $medecin, UpdateMedecinRequest $request)
    {
        if(strtolower($medecin->courrielMedecin) != strtolower($request->courrielMedecin)){
            $newcourriel = Medecin::whereRaw('LOWER(courrielMedecin) = LOWER(?)', $request["courrielMedecin"])->first();
            if($newcourriel != null){
                return redirect()->back()->with('error', 'Le courriel existe dans notre système');
            }
        }
        if(strtolower($medecin->numeroLicence) != strtolower($request->numeroLicence)){
            $newLicence = Medecin::whereRaw('LOWER(numeroLicence) = LOWER(?)', $request["numeroLicence"])->first();
            if($newLicence != null){
                return redirect()->back()->with('error', 'Le numéro de licence du médecin existe dans notre système');
            }
        }

        //$courrielExist = 
       try{
            $medecin->nomMedecin = $request->nomMedecin;
            $medecin->prenomMedecin = $request->prenomMedecin;
            $medecin->courrielMedecin = $request->courrielMedecin;
            $medecin->telephoneMedecin = $request->telephoneMedecin;
            $medecin->adresseMedecin = $request->adresseMedecin;
            $medecin->numeroLicence = $request->numeroLicence;
            $medecin->titresAcademiques = $request->titresAcademiques;
            $medecin->affiliationsProfessionnelles = $request->affiliationsProfessionnelles;
            $medecin->update();
            return redirect()->back()->with('success', 'Mises a jour effectuees avec succes');

       }
       catch(Exception $e){
            dd($e);
       }
    }
    
    
}
