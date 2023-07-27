<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::factory()->create();

        Car::factory()->create([
            'name' => 'SUV',
            'brand' => 'Ford',
            'model' => 'Explorer',
            'seats' => 7,
            'year' => 2021,
            'color' => 'Silver',
            'type' => 'SUV',
            'transmission' => 'Automatic',
            'fuel_type' => 'Gasoline',
            'price_per_hour' => 70.00,
            'features' => 'Navigation System, Leather Seats, Bluetooth',
            'remarks' => 'Spacious and comfortable',
        ]);

        Car::factory()->create([
            'name' => 'Luxury Car',
            'brand' => 'Mercedes-Benz',
            'model' => 'S-Class',
            'seats' => 5,
            'year' => 2022,
            'color' => 'Black',
            'type' => 'Luxury Sedan',
            'transmission' => 'Automatic',
            'fuel_type' => 'Diesel',
            'price_per_hour' => 150.00,
            'features' => 'Panoramic Roof, Massaging Seats, Premium Sound System',
            'remarks' => 'Elegant and top-notch performance',
        ]);

        Car::factory()->create([
            'name' => 'Sports Car',
            'brand' => 'Chevrolet',
            'model' => 'Corvette',
            'seats' => 2,
            'year' => 2021,
            'color' => 'Red',
            'type' => 'Sports Coupe',
            'transmission' => 'Manual',
            'fuel_type' => 'Petrol',
            'price_per_hour' => 100.00,
            'features' => 'Convertible Top, Performance Package',
            'remarks' => 'High-speed performance and style',
        ]);

        Car::factory()->create([
            'name' => 'Family Minivan',
            'brand' => 'Honda',
            'model' => 'Odyssey',
            'seats' => 8,
            'year' => 2019,
            'color' => 'White',
            'type' => 'Minivan',
            'transmission' => 'Automatic',
            'fuel_type' => 'Gasoline',
            'price_per_hour' => 50.00,
            'features' => 'DVD Entertainment System, Sliding Doors',
            'remarks' => 'Ideal for family trips',
        ]);
    }
}
