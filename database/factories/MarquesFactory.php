<?php

namespace Database\Factories;

use App\Models\Marques;
use Illuminate\Database\Eloquent\Factories\Factory;

class MarquesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Marques::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "libelleMarque" => $this-> faker-> lastName,
        ];
    }
}
