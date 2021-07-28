<?php

namespace Database\Factories;

use App\Models\Chauffeurs;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChauffeursFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Chauffeurs::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom"            => $this-> faker-> lastName,
            "prenom"         => $this-> faker-> firstName,
            "telChauffeur"   => $this-> faker-> phoneNumber,
            "cniChauffeur"   => $this-> faker-> creditCardNumber,
        ];
    }
}
