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
        // cách thêm 1 user
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@example.com',
        //     'password' => Hash::make('password'),
        // ]);

        //cách hêm nhiều users
        $users = [
            [
                'name' => 'User 1',
                'email' => 'user1@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'User 2',
                'email' => 'user2@example.com',
                'password' => Hash::make('password'),
            ],
            // Thêm các user khác tương tự
        ];

        User::insert($users);
    }
}
