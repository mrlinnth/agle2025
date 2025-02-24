<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Super admin',
            'email' => 'admin@mail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'AGLE admin',
            'email' => 'agle2025@mail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);

        Setting::create([
            'name' => 'AGLE 2025',
            'noti_email' => 'ylt@evolxit.com',
        ]);
    }
}
