<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\PieceDefectueuses;
use Illuminate\Database\Eloquent\Factories\Factory;

class PieceDefectueusesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PieceDefectueuses::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "libellePiece"           => $this->faker->name(),
            "fournisseur_id"         =>  rand(1,30),
            "maintenance_id"         => rand(1,30),

        ];
    }
}
