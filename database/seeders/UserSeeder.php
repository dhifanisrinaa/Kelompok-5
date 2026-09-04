<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Dhifa Nisrina Arji',
                'nis' => '123451',
                'password' => 'dhifa123',
            ],
            [
                'name' => 'Muhammad Fadhil Rahman',
                'nis' => '123452',
                'password' => 'fadhil123',
            ],
            [
                'name' => 'Muhammad Qidamal Farhizi',
                'nis' => '123453',
                'password' => 'qidamal123',
            ],
            [
                'name' => 'Nur Hazizah',
                'nis' => '123454',
                'password' => 'hazizah123',
            ],
            [
                'name' => 'Wily Yanti',
                'nis' => '123465',
                'password' => 'wily123',
            ],
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'nis' => $user['nis'],
                'password' => Hash::make($user['password']),
                'role' => 'siswa',
            ]);
        }
    }
}