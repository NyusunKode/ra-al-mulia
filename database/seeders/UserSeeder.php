<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@example.com',
                'no_telp' => '081525932051',
                'role' => 'admin'
            ],
            [
                'name' => 'Guru',
                'username' => 'guru',
                'email' => 'guru@example.com',
                'no_telp' => '08989342079',
                'role' => 'guru'
            ]
        ];

        foreach ($users as $userData) {
            $user = User::create([
                'name' => $userData['name'],
                'username' => $userData['username'],
                'email' => $userData['email'],
                'no_telp' => $userData['no_telp'],
                'password' => Hash::make('password')
            ]);

            $user->assignRole($userData['role']);
        }
    }
}
