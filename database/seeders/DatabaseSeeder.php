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
use App\Models\Particuliers;
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
        Vehicule::factory(10)->create();
        Particuliers::factory(10)->create();
        Modele::factory(10)->create();
        Fournisseurs::factory(10)->create();
        Chauffeurs::factory(10)->create();
        Employes::factory(10)->create();
        Marques::factory(10)->create();
        Factures::factory(10)->create();
        Garages::factory(10)->create();
        Entreprises::factory(10)->create();
    }
}
