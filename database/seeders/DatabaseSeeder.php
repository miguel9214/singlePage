<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Note;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    //    Note::factory(30)->create();

        User::factory()->create([
            'name' => 'Bethy Lopez',
            'email' => 'bethy@example.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
