<?php

namespace Database\Factories;

use App\Models\Maintenance;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaintenanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Maintenance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "libelleMaintenance"  => $this->faker->lastName,
            "garage_id"           => rand(1,30),
            "vehicule_id"         => rand(1,30),
        ];
    }
}
