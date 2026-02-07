<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'is_admin' => true,
        ]);
        User::create([
            'name' => 'user',
            'username' => 'user',
            'password' => Hash::make('user'),
            'is_admin' => false,
        ]);
    }
}
