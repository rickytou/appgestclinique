<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function createpatient(){
        return view("admin.formcreatepatient");
    }
}
