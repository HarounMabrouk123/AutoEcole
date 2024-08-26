<?php

namespace Database\Factories;

use App\Models\Trainer;
use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainerFactory extends Factory
{
    protected $model = Trainer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(25, 65),
            'car_id' => Car::factory(), // This assumes you have a factory for Car
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'description' => $this->faker->paragraph,
        ];
    }
}