<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RendezVousController;
use App\Http\Controllers\CongeController;
use App\Http\Controllers\DisponibiliteController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('bienvenue');
});
Route::get('/login', function(){
    return view('login');
});
Route::get('/service/{service}', [ServiceController::class,'viewservice']);
Route::get('/contact', function(){
    return view('contact');
});

Route::get('/admin/home', function(){
    return view('admin.home');
})->name("admin.show");


 Route::prefix('patient')->group(function(){
    Route::get('/addpatient', [PatientController::class,'formAddPatient'])->name("patient.show");
    Route::post('/savepatient', [PatientController::class,'savePatient'])->name("patient.save");
});

/**
 * Route pour la gestion des medecins
 */
Route::prefix('medecin')->group(function(){
    Route::get('/ajoutermedecin', [MedecinController::class,'formAddMedecin'])->name("medecin.show");
    Route::get('/{medecin}', [MedecinController::class,'viewmedecin']);
    Route::post('/savemedecin', [MedecinController::class,'savemedecin'])->name("medecin.save");
});

/**
 * Route pour la gestion des utilisateurs
 */
Route::prefix('user')->group(function(){
    Route::get('/login', [UserController::class,'login']);
    Route::get('/admin', [UserController::class,'admin']);
});


/*
* Route pour la gestion des rendez-vous
*/
Route::prefix('rendezvous')->group(function(){
    Route::get('/ajouterrendezvous', [RendezVousController::class,'formAddRendezVous'])->name("rendezvous.show");
    Route::post('/saverendezvous', [RendezVousController::class,'saverendezvous'])->name("rendezvous.save");
});

/*
* Route pour la gestion des rendez-vous
*/
Route::prefix('conge')->group(function(){
    Route::get('/prendreconge', [CongeController::class,'formAddConge'])->name("conge.show");
    Route::post('/saveconge', [CongeController::class,'saveconge'])->name("conge.save");
});

/*
* Route pour la gestion des disponiblites
*/
Route::prefix('disponibilite')->group(function(){
    Route::get('/ajouterdisponibilite', [DisponibiliteController::class,'formAddDisponibilite'])->name("disponibilite.show");
    Route::post('/savedisponibilite', [DisponibiliteController::class,'savedisponibilite'])->name("disponibilite.save");
});