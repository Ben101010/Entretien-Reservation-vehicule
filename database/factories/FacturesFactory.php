<?php

namespace Database\Factories;

use App\Models\Factures;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacturesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Factures::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "libelleFacture" => $this-> faker-> lastName,
        ];
    }
}
