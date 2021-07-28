<?php

namespace Database\Factories;

use App\Models\Vehicule;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehiculeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            "immatriculationVehicule"  => rand(1, 9999)."JK"."01",
                    "typeTransmission" => $this-> faker-> name,
                    "couleur"          => $this-> faker-> safeColorName,
                    "energie"          => $this-> faker-> boolean(),
                    "marque_id"        =>  rand(1, 10),
                    "modele_id"        =>  rand(1, 10),

        ];
    }
}
