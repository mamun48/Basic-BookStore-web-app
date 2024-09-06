<?php

namespace Database\Seeders;
use App\Models\Book;
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
        // \App\Models\User::factory(10)->create();
            user::truncate();
            \App\Models\User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);

            Book::truncate();
            Book::factory()->count(100)->create();
    }
}
