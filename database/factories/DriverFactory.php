<?php

namespace Database\Factories;

use App\Models\Driver;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Driver>
 */
class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => function () {
                return User::factory()->create()->id;
            },
            "status" => Driver::STATUS_AVAILABLE,
            "price" => 30.00,
            "name" => fake()->name,
            "mobile" => fake()->phoneNumber,
            "address" => fake()->address,
            "remarks" => fake()->sentence,
        ];
    }
}
