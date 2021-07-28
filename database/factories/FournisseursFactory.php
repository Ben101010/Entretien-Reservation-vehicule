<?php

namespace Database\Factories;

use App\Models\Fournisseurs;
use Illuminate\Database\Eloquent\Factories\Factory;

class FournisseursFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Fournisseurs::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom"                    => $this-> faker-> lastName,
            "prenom"                 => $this-> faker-> firstName,
            "telFournisseur"         => $this-> faker-> phoneNumber,
            "addresseFournisseur"    => $this-> faker-> address,
        ];
    }
}
