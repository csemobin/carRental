<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Car::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'brand' => $this->faker->company(), // Assuming 'brand' refers to a car manufacturer
            'model' => $this->faker->word(),
            'year' => $this->faker->year(),
            'car_type' => $this->faker->randomElement(['SUV', 'Sedan', 'Truck', 'Coupe', 'Convertible']), // Adjust types accordingly
            'daily_rent_price' => $this->faker->randomFloat(2, 50, 500), // Random price between 50 and 500
            'availability' => $this->faker->boolean(),
            'image' => $this->faker->imageUrl(640, 480, 'cars', true), // Generates a random car image
        ];
    }
}
