<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RendezVousController extends Controller
{
    /* Methode permettant d'afficher un formulaire de prise de rendez-vous*/
    public function formAddRendezVous(){
        return view("rendezvous.addrendezvous");
    }
}
