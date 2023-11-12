<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use App\Models\Patient;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home(){
        $allpatients = Patient::all()->count();
        $listmedecins = Medecin::where("statutMedecin", "actif")->get();
        $allmedecins =  $listmedecins->count();
        return view("admin.home", compact("allpatients","allmedecins", "listmedecins"));
    }
    public function aide(){
        return view("parametres.aide");
    }
}
