<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cars>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $carModels = [
            'BMW X6',
            'Audi A4',
            'Mercedes-Benz C-Class',
            'Toyota Corolla',
            'Honda Civic',
            'Ford Mustang',
            'Chevrolet Camaro',
            'Tesla Model 3',
            'Porsche 911',
            'Lamborghini Huracan',
            // Add more car models as needed
        ];
        return [
            'marque' => $this->faker->randomElement($carModels), // Random car name and model
            'matricule' => strtoupper($this->faker->bothify('???-#####')), // Random car serial number
            'distance' => $this->faker->numberBetween(10000, 100000) . ' km', // String number for distance
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
