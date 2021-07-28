<?php

namespace Database\Factories;

use App\Models\Entreprises;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntreprisesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Entreprises::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "designEntreprise"  => $this-> faker-> lastName,
            "localEntreprise"   => $this-> faker-> address,
            "nccEntreprise"     => $this-> faker-> creditCardNumber,
            "emailEntreprise"   => $this-> faker-> safeEmail,
            "telEntreprise1"    => $this-> faker-> phoneNumber,
            "telEntreprise2"    => $this-> faker-> phoneNumber,
        ];
    }
}
