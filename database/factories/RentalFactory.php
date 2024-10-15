<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rental>
 */
class RentalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Rental::class;

    public function definition()
    {
        $startDate = $this->faker->dateTimeBetween('-1 month', '+1 week');
        $endDate = $this->faker->dateTimeBetween($startDate, '+1 week');
        $totalCost = $this->faker->randomFloat(2, 50, 1000); // assuming total cost is between 50 and 1000

        return [
            'user_id' => User::factory(), // assumes you have a User factory
            'car_id' => Car::factory(),   // assumes you have a Car factory
            'start_date' => $startDate->format('Y-m-d'),
            'end_date' => $endDate->format('Y-m-d'),
            'total_cost' => $totalCost,
        ];
    }
}
