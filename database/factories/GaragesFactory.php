<?php

namespace Database\Factories;

use App\Models\Garages;
use Illuminate\Database\Eloquent\Factories\Factory;

class GaragesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Garages::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        "nom"               => $this-> faker-> lastName,
        "numeroGarage"      => $this-> faker-> phoneNumber,
        "adresseGarage"     => $this-> faker-> address,
        ];
    }
}
