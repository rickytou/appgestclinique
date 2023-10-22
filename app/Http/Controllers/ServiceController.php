<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function viewService(String $service){
        if($service == "administration"){
            return view("services.administration");
        }
        else if($service == "chirugie"){
            return view("services.chirurgie");
        }
        else if($service == "lunetterie"){
            return view("services.lunetterie");
        }
        else if($service == "clinique"){
            return view("services.clinique");
        }
        else if($service == "pharmacie"){
            return view("services.pharmacie");
        }
        else if($service == "examen"){
            return view("services.examen");
        }
    }
}
