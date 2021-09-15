<?php

namespace Database\Seeders;


use App\Models\Modele;
use App\Models\Garages;
use App\Models\Marques;
use App\Models\Employes;
use App\Models\Factures;
use App\Models\Vehicule;
use App\Models\Chauffeurs;
use App\Models\Entreprises;
use App\Models\Fournisseurs;
use App\Models\Maintenance;
use App\Models\Particuliers;
use App\Models\PieceDefectueuses;

use Database\Factories\PieceDefectueusesFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Vehicule::factory(30)->create();
        PieceDefectueuses::factory(30)->create();
        Maintenance::factory(30)->create();
        Particuliers::factory(30)->create();
        Modele::factory(30)->create();
        Fournisseurs::factory(30)->create();
        Chauffeurs::factory(30)->create();
        Employes::factory(30)->create();
        Marques::factory(30)->create();
        Factures::factory(30)->create();
        Garages::factory(30)->create();
        Entreprises::factory(30)->create();
    }
}
