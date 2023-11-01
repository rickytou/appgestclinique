<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\PatientController;
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
Route::get('/medecin/{medecin}', [MedecinController::class,'viewmedecin']);
Route::get('/contact', function(){
    return view('contact');
});

Route::get('/admin/home', function(){
    return view('admin.home');
});
 Route::prefix('patient')->group(function(){
    Route::get('/adminpatient', [PatientController::class,'adminpatient']);
    Route::post('/savepatient', [PatientController::class,'savepatient']);
});

Route::prefix('user')->group(function(){
    Route::get('/login', [UserController::class,'login']);
    Route::get('/admin', [UserController::class,'admin']);
});


