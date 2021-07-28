<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


    //TABLEAU DE BORD
Route::get('/', [\App\Http\Controllers\IndexController::class,'index'])->name("Dashbord");

    //GESTION DES MARQUES DE VEHICULE
Route::get('/marques', [\App\Http\Controllers\MarqueController::class,'accueil'])->name("marques.liste");
Route::get('/marques/new', [\App\Http\Controllers\MarqueController::class,'accueil1'])->name("marques.create");

    // GESTION DES MODELES DE VEHICULE
Route::get('/modeles', [\App\Http\Controllers\ModeleController::class,'affichemodele'])->name("modeles.liste");
Route::get('/modeles/new', [\App\Http\Controllers\ModeleController::class,'formmodele'])->name("modeles.create");

    // GESTION DES EMPLOYÉS
Route::get('/employes', [\App\Http\Controllers\EmployeController::class,'afficheemploye'])->name("employes.liste");
Route::get('/employes/new', [\App\Http\Controllers\EmployeController::class,'formemploye'])->name("employes.create");

    // GESTION DES CHAUFFEURS
Route::get('/chauffeurs', [\App\Http\Controllers\ChauffeurController::class,'affichechauffeur'])->name("chauffeurs.liste");
Route::get('/chauffeurs/new', [\App\Http\Controllers\ChauffeurController::class,'formchauffeur'])->name("chauffeurs.create");

    // GESTION DES GARAGES
Route::get('/garages', [\App\Http\Controllers\GarageController::class,'affichegarage'])->name("garages.liste");
Route::get('/garages/new', [\App\Http\Controllers\GarageController::class,'formgarage'])->name("garages.create");

    // GESTION DES PARTICULIERS
Route::get('/particuliers', [\App\Http\Controllers\ParticulierController::class,'afficheparticulier'])->name("particuliers.liste");
Route::get('/particuliers/new', [\App\Http\Controllers\ParticulierController::class,'formparticulier'])->name("particuliers.create");

    // GESTION DES ENTREPRISES
Route::get('/entreprises', [\App\Http\Controllers\EntrepriseController::class,'afficheentreprise'])->name("entreprises.liste");
Route::get('/entreprises/new', [\App\Http\Controllers\EntrepriseController::class,'formentreprise'])->name("entreprises.create");
