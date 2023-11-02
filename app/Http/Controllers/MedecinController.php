<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
