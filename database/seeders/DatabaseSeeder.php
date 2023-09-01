<?php

namespace Database\Seeders;

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

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@polindra.ac.id',
            'password' => 'admin12345',
            'role' => 'super'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Willy Permana Putra',
            'email' => 'willy@polindra.ac.id',
            'password' => 'admin12345',
            'role' => 'admin'
        ]);
    }
}
