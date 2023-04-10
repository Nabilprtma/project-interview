<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User::create([
        'name' => 'Nabil',
        'email' => 'nabil@gmail.com',
        'password' => bcrypt('nabil'),
        'role' => 'admin',
       ]);

       User::create([
        'name' => 'petugas',
        'email' => 'petugas@gmail.com',
        'password' => bcrypt('petugas'),
        'role' => 'petugas',
       ]);

    }
}
