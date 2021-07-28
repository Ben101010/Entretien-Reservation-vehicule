<?php

namespace Database\Factories;

use App\Models\Employes;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom"          => $this-> faker-> lastName,
            "prenom"       => $this-> faker-> firstName,
            "telEmploye"   => $this-> faker-> phoneNumber,
            "cniEmploye"   => $this-> faker-> creditCardNumber,
            "login"        => $this-> faker-> safeEmail,
            "password"     => $this-> faker-> md5,
            "photo"        => $this-> faker-> imageUrl(),
        ];
    }
}
