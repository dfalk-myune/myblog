<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // Create the admin user through the AdminUserSeeder
        $this->call([
            // AdminUserSeeder::class,
            AdminUserSeeder::class,

        ]); 


        User::factory(3)
        ->has(Post::factory(3))
        ->create();



        // User::create([
        //     'name' =>'Peter',
        //     'email' => 'admin@myune.edu.au',
        //     'password' => Hash::make('password'),
        //     'role' => 'admin',]);

        //User::factory()->create([
        //    'name' => 'Test User',
        //    'email' => 'test@example.com',
        //]);
        //$this->call(PostSeeder::class);
        /**
         * 
         * if (!User::where('role', 'admin')->exists()) {
         * 
         * 
         * 
         * 
         * 
         * 
        //     // Create the admin user
        //     User::create([
        //         'name' => 'Admin Name',
        //         'email' => 'admin@example.com',
        //         'password' => Hash::make('password'), // Replace 'password' with your desired password
        //         'role' => 'admin',
        //     ]);
        // }
         * 
         * 
         * 
         * 
         */
    }
}
