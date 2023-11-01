<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function adminpatient(){
        return view("admin.adminpatient");
    }
    public function savepatient(Request $request){
        dd($request);
    }
}
