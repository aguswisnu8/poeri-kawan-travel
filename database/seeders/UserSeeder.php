<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Customer;
use App\Models\Driver;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'email' => 'admin@gmail.com',
        ]);
        $admin = Admin::factory()->create([
            'name' => 'Super Admin',
            'user_id' => $user->id,
        ]);
        $customer = Customer::factory()->create();
        $driver = Driver::factory()->create();
    }
}
