<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/marques/create', [\App\Http\Controllers\MarqueController::class,'accueil1'])->name("marques.create");
Route::post('/marques/store', [\App\Http\Controllers\MarqueController::class,'store'])->name("marques.store");
Route::get('/marques/modifier/{id}', [\App\Http\Controllers\MarqueController::class,'modifierMarque'])->name("marques.modifier");
Route::get('/marques/delete/{id}', [\App\Http\Controllers\MarqueController::class,'delete'])->name("marques.delete");
Route::post('/marques/Update', [\App\Http\Controllers\MarqueController::class,'UpdateMarque'])->name("marques.update");

    // GESTION DES MODELES DE VEHICULE
Route::get('/modeles', [\App\Http\Controllers\ModeleController::class,'affichemodele'])->name("modeles.liste");
Route::get('/modeles/create', [\App\Http\Controllers\ModeleController::class,'formmodele'])->name("modeles.create");
Route::post('/modeles/store', [\App\Http\Controllers\ModeleController::class,'store'])->name("modeles.store");
Route::get('/modeles/modifier/{id}', [\App\Http\Controllers\ModeleController::class,'modifierModele'])->name("modeles.modifier");
Route::get('/modeles/delete/{id}', [\App\Http\Controllers\ModeleController::class,'delete'])->name("modeles.delete");
Route::post('/modeles/Update', [\App\Http\Controllers\ModeleController::class,'UpdateModele'])->name("modeles.update");

    // GESTION DES EMPLOYÉS
Route::get('/employes', [\App\Http\Controllers\EmployeController::class,'afficheemploye'])->name("employes.liste");
Route::get('/employes/create', [\App\Http\Controllers\EmployeController::class,'formemploye'])->name("employes.create");
Route::post('/employes/store', [\App\Http\Controllers\EmployeController::class,'store'])->name("employes.store");
Route::get('/employes/modifier/{id}', [\App\Http\Controllers\EmployeController::class,'modifierEmploye'])->name("employes.modifier");
Route::get('/employes/delete/{id}', [\App\Http\Controllers\EmployeController::class,'delete'])->name("employes.delete");
Route::post('/employes/Update', [\App\Http\Controllers\EmployeController::class,'UpdateEmploye'])->name("employes.update");

    // GESTION DES CHAUFFEURS
Route::get('/chauffeurs', [\App\Http\Controllers\ChauffeurController::class,'affichechauffeur'])->name("chauffeurs.liste");
Route::get('/chauffeurs/create', [\App\Http\Controllers\ChauffeurController::class,'formchauffeur'])->name("chauffeurs.create");
Route::post('/chauffeurs/store', [\App\Http\Controllers\ChauffeurController::class,'store'])->name("chauffeurs.store");
Route::get('/chauffeurs/modifier/{id}', [\App\Http\Controllers\ChauffeurController::class,'modifierChauffeur'])->name("chauffeurs.modifier");
Route::post('/chauffeurs/Update', [\App\Http\Controllers\ChauffeurController::class,'UpdateChauffeur'])->name("chauffeurs.update");
Route::get('/chauffeurs/delete/{id}', [\App\Http\Controllers\ChauffeurController::class,'delete'])->name("chauffeurs.delete");

    // GESTION DES GARAGES
Route::get('/garages', [\App\Http\Controllers\GarageController::class,'affichegarage'])->name("garages.liste");
Route::get('/garages/create', [\App\Http\Controllers\GarageController::class,'formgarage'])->name("garages.create");
Route::post('/garages/store', [\App\Http\Controllers\GarageController::class,'store'])->name("garages.store");
Route::get('/garages/modifier/{id}', [\App\Http\Controllers\GarageController::class,'modifierGarage'])->name("garages.modifier");
Route::post('/garages/Update', [\App\Http\Controllers\GarageController::class,'UpdateGarage'])->name("garages.update");
Route::get('/garages/delete/{id}', [\App\Http\Controllers\GarageController::class,'delete'])->name("garages.delete");

    // GESTION DES PARTICULIERS
Route::get('/particuliers', [\App\Http\Controllers\ParticulierController::class,'afficheparticulier'])->name("particuliers.liste");
Route::get('/particuliers/create', [\App\Http\Controllers\ParticulierController::class,'formparticulier'])->name("particuliers.create");
Route::post('/particuliers/store', [\App\Http\Controllers\ParticulierController::class,'store'])->name("particuliers.store");
Route::get('/particuliers/modifier/{id}', [\App\Http\Controllers\ParticulierController::class,'modifierParticulier'])->name("particuliers.modifier");
Route::post('/particuliers/Update', [\App\Http\Controllers\ParticulierController::class,'UpdateParticulier'])->name("particuliers.update");
Route::get('/particuliers/delete/{id}', [\App\Http\Controllers\ParticulierController::class,'delete'])->name("particuliers.delete");

    // GESTION DES ENTREPRISES
Route::get('/entreprises', [\App\Http\Controllers\EntrepriseController::class,'afficheentreprise'])->name("entreprises.liste");
Route::get('/entreprises/create', [\App\Http\Controllers\EntrepriseController::class,'formentreprise'])->name("entreprises.create");
Route::post('/entreprises/store', [\App\Http\Controllers\EntrepriseController::class,'store'])->name("entreprises.store");
Route::get('/entreprises/modifier/{id}', [\App\Http\Controllers\EntrepriseController::class,'modifierEntreprise'])->name("entreprises.modifier");
Route::post('/entreprises/Update', [\App\Http\Controllers\EntrepriseController::class,'UpdateEntreprise'])->name("entreprises.update");
Route::get('/entreprises/delete/{id}', [\App\Http\Controllers\EntrepriseController::class,'delete'])->name("entreprises.delete");

    // GESTION DES RESERVATION
Route::get('/reservations', [\App\Http\Controllers\ReservationController::class,'affichereservation'])->name("reservations.liste");
Route::get('/reservations/create', [\App\Http\Controllers\ReservationController::class,'formreservation'])->name("reservations.create");
//Route::post('/reservation/store', [\App\Http\Controllers\EntrepriseController::class,'store'])->name("entreprises.store");


// GESTION DES FOURNISSEURS
Route::get('/fournisseurs', [\App\Http\Controllers\FournisseurController::class,'affichefournisseur'])->name("fournisseurs.liste");
Route::get('/fournisseurs/create', [\App\Http\Controllers\FournisseurController::class,'formfournisseur'])->name("fournisseurs.create");
Route::post('/fournisseurs/store', [\App\Http\Controllers\FournisseurController::class,'store'])->name("fournisseurs.store");
Route::get('/fournisseurs/modifier/{id}', [\App\Http\Controllers\FournisseurController::class,'modifierFournisseur'])->name("fournisseurs.modifier");
Route::post('/fournisseurs/Update', [\App\Http\Controllers\FournisseurController::class,'UpdateFournisseur'])->name("fournisseurs.update");
Route::get('/fournisseurs/delete/{id}', [\App\Http\Controllers\FournisseurController::class,'delete'])->name("fournisseurs.delete");

    // GESTION DES PIECES ECHANGÉES
Route::get('/pieceDefectueuse', [\App\Http\Controllers\PieceDefectueuseController::class,'affichepiece'])->name("PieceDefectueuse.liste");
Route::get('/pieceDefectueuse/create', [\App\Http\Controllers\PieceDefectueuseController::class,'formpiece'])->name("PieceDefectueuse.create");
Route::post('/pieceDefectueuse/store', [\App\Http\Controllers\PieceDefectueuseController::class,'store'])->name("PieceDefectueuse.store");
Route::get('/pieceDefectueuse/modifier/{id}', [\App\Http\Controllers\PieceDefectueuseController::class,'modifierPieceDefectueuse'])->name("PieceDefectueuse.modifier");
Route::post('/pieceDefectueuse/Update', [\App\Http\Controllers\PieceDefectueuseController::class,'UpdatePieceDefectueuse'])->name("PieceDefectueuse.update");
Route::get('/pieceDefectueuse/delete/{id}', [\App\Http\Controllers\PieceDefectueuseController::class,'delete'])->name("PieceDefectueuse.delete");

    // GESTION DES FACTURES
Route::get('/facture/Reservation', [\App\Http\Controllers\FactureController::class,'affichefactureReservation'])->name("factures.facturesReservation");
Route::get('/facture/Entretien', [\App\Http\Controllers\FactureController::class,'affichefactureEntretien'])->name("factures.facturesEntretien");
//Route::get('/facture/create', [\App\Http\Controllers\PieceDefectueuseController::class,'formpiece'])->name("PieceDefectueuse.create");
//Route::post('/facture/store', [\App\Http\Controllers\EntrepriseController::class,'store'])->name("pieceDefectueuse.store");

    // GESTION DES VEHICULE
Route::get('/vehicule', [\App\Http\Controllers\VehiculeController::class,'affichevehicule'])->name("Vehicules.liste");
Route::get('/vehicule/create', [\App\Http\Controllers\VehiculeController::class,'formvehicule'])->name("Vehicules.create");
Route::post('/vehicule/store', [\App\Http\Controllers\VehiculeController::class,'store'])->name("Vehicules.store");

    // GESTION DES MAINTENANCES DES VEHICULES
Route::get('/maintenance', [\App\Http\Controllers\MaintenanceController::class,'affichemaintenance'])->name("Maintenances.liste");
Route::get('/maintenance/create', [\App\Http\Controllers\MaintenanceController::class,'formmaintenance'])->name("Maintenances.create");
Route::post('/maintenance/store', [\App\Http\Controllers\MaintenanceController::class,'store'])->name("Maintenances.store");
Route::get('/maintenance/modifier/{id}', [\App\Http\Controllers\MaintenanceController::class,'modifierMaintenance'])->name("Maintenances.modifier");
Route::post('/maintenance/Update', [\App\Http\Controllers\MaintenanceController::class,'UpdateMaintenance'])->name("Maintenances.update");
Route::get('/maintenance/delete/{id}', [\App\Http\Controllers\MaintenanceController::class,'delete'])->name("Maintenances.delete");



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
