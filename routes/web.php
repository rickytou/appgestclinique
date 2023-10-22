<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MedecinController;
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