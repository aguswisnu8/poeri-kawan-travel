<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
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
        return [
            'name' => 'Economy Car',
            'status' => Car::STATUS_AVAILABLE,
            'brand' => 'Toyota',
            'model' => 'Yaris',
            'seats' => 4,
            'year' => 2020,
            'color' => 'Blue',
            'type' => 'Compact',
            'transmission' => 'Automatic',
            'fuel_type' => 'Petrol',
            'price_per_hour' => 30.00,
            'features' => 'Air Conditioning, AM/FM Radio',
            'remarks' => 'Perfect for city driving',
        ];
    }
}
