<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Employe;
use App\Models\JobListing;
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
        // Blog::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        JobListing::factory(50)->create();
        User::factory(10)->create();
        Employe::factory(50)->create();
    }
}
