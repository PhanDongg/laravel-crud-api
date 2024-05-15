<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => "admin",
            ],
            [
                'email' => 'user@example.com',
                'password' => Hash::make('password'),
                'role' => 'user'
            ],
        ];

        User::insert($users);
    }
}