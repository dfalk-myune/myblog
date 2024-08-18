<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Check if an admin user already exists
        if (!User::where('role', 'admin')->exists()) {
            // Create the admin user
            User::create([
                'name' => 'Bob',
                'email' => 'Bob@example.com',
                'password' => Hash::make('pete'), // Replace 'password' with your desired password
                'role' => 'admin',
            ]);
        }
    }
}