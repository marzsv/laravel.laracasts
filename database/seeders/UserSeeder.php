<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Mario Juárez',
            'email' => 'marz@hey.com',
            'username' => 'marz',
            'password' => Hash::make('password'),
        ]);

        User::factory()->count(10)->create();
    }
}
