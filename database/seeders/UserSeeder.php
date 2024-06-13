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
                'email' => 'admin@email.com',
                'password' => Hash::make('password'),
                'role' => "admin",
                'example' => 'vi du',
            ],
            [
                'email' => 'user@email.com',
                'password' => Hash::make('password'),
                'role' => 'user',
                'example' => 'vi du 2',
            ],
        ];

        User::insert($users);

    }
}