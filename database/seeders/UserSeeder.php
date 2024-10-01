<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Dilshoda',
            'email' => 'dil@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name' => 'Afruza',
            'email' => 'afruza@gmail.com',
            'password' => bcrypt('7777777'),
        ]);
    }
}
