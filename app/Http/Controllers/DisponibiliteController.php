<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisponibiliteController extends Controller
{
    public function formAddDisponibilite(){
        return view("disponibilite.adddisponibilite");
    }
}
