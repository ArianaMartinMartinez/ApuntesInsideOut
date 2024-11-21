<?php

namespace Database\Seeders;

use App\Models\Journal;
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
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Journal::factory()->create([
            'entry' => 'Primera entrada',
            'emotion' => 'img/emotions/alegria.jpg',
        ]);

        //Journal::factory(10)->create();
    }
}
