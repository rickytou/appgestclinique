<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CongeController extends Controller
{
    public function formAddConge(){
        return view("conge.addconge");
    }
}
