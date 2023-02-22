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
        User::query()->create([
            'username' => 'rafisovic4',
            'password' => Hash::make('22qew132ws'),
            'role' => 'admin',
        ]);

        User::query()->create([
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'role' => 'admin',
        ]);
    }
}
