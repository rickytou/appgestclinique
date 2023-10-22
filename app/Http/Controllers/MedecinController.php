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
}
