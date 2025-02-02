<?php

namespace Database\Seeders;
use App\Models\Job;


use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Joe',
            'last_name' => 'Bart',
            'email' => fake()->unique()->safeEmail(), // Ensure the email is unique
        ]);
        

         $this->call(JobSeeder::class);
    }
}
