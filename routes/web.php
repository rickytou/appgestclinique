<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RendezVousController;
use App\Http\Controllers\CongeController;
use App\Http\Controllers\DisponibiliteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AntecedentMedicalController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('bienvenue');
})->name("home");
Route::get('/login', function(){
    return view('login');
});
Route::get('/service/{service}', [ServiceController::class,'viewservice']);
Route::get('/contact', function(){
    return view('contact');
});


/**
 * Route pour la gestion de la securite
 */
Route::middleware("auth")->group(function(){

/* Route dashboard */
    Route::prefix('app')->name('app.')->group(function(){    
        Route::get('/admin/home', [AppController::class, 'home'])->name("home");
        /** Parametres */ 
        Route::get('/parametres/aide', [AppController::class, 'aide'])->name("aide");
    });

/* Route Patient */
    Route::prefix('patient')->group(function(){
        Route::get('/patientantecedent',[PatientController::class,'patientantecedent'])->name('patient.patientantecedent');
        Route::get('/detailspatient/{id}', [PatientController::class,'detailspatient'])->name("patient.detailspatient");
        Route::get('/addpatient', [PatientController::class,'formAddPatient'])->name("patient.show");
        Route::post('/savepatient', [PatientController::class,'savePatient'])->name("patient.save");
        Route::get('/listpatient', [PatientController::class,'listPatient'])->name("patient.list"); 
        Route::get('/editpatient/{patient}', [PatientController::class, 'editpatient'])->name("patient.edit"); 
        /** update */
        Route::put('/updatepatient/{patient}', [PatientController::class, 'updatepatient'])->name('patient.update');
        /** Rechercher un nodossier du patient */
        Route::get('/searchpatient', [PatientController::class, 'searchpatient'])->name('patient.searchpatient');
        Route::get('/filtrepatient', [PatientController::class, 'filtrepatient'])->name('patient.filtrepatient');
    });          
    /* Route pour la gestion des antecedents medicaux */
    Route::prefix('antecedentmedical')->name("antecedentmedical.")->group(function(){
        Route::get('/ajouterantecedentmedical', [AntecedentMedicalController::class,'formAddAntecedentMedical'])->name("show");
        Route::post('/saveantecedentmedical', [AntecedentMedicalController::class,'saveAntecedentMedical'])->name("save");
        });


   

    /* Route pour la gestion des medecins */
    Route::prefix('medecin')->name("medecin.")->group(function(){

        Route::get('/filtremedecin', [MedecinController::class, 'filtremedecin'])->name('filtremedecin');
      
        Route::get('/searchmedecinbynumber', [MedecinController::class, 'searchmedecinbynumber'])->name('searchmedecinbynumber');

        Route::get('/detailsmedecin/{id}', [MedecinController::class,'detailsmedecin'])->name("detailsmedecin");

        Route::get('/listmedecin', [MedecinController::class,'listMedecin'])->name("listmedecin");

        Route::get('/ajoutermedecin', [MedecinController::class,'formAddMedecin'])->name("showmedecin");

        Route::get('/{medecin}', [MedecinController::class,'viewmedecin'])->name("view");
        Route::post('/savemedecin', [MedecinController::class,'savemedecin'])->name("savemedecin");
        /** Edit */
        Route::get('/editmedecin/{medecin}', [MedecinController::class,'editmedecin'])->name("editmedecin");
        /** update */
        Route::put('/updatemedecin/{medecin}', [MedecinController::class, 'updatemedecin'])->name('updatemedecin');
        /** Search */
 
    
    
    });
});
//});


/**
 * Route pour la gestion des utilisateurs
 */
/*Route::prefix('user')->group(function(){
    Route::get('/login', [UserController::class,'login']);
    Route::get('/admin', [UserController::class,'admin']);
});*/


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




/**
 * Route pour l'authentification
 */
Route::prefix("auth")->name("auth.")->group(function(){
    Route::get("/cpanel", [AuthController::class, 'login'])->name("login");
    Route::post("/cpanel", [AuthController::class, 'handlelogin'])->name("handlelogin");
    
});