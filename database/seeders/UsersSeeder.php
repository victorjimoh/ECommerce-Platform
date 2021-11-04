<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $users = [
            [
                'firstname' => 'Admin',
                'lastname' => 'Admin',
                'email' => 'admin@gmail.com',
                'gender' => 'Male',
                'country' => 'London',
                'password' => '123456',
                'is_admin' => '1',
            ],
        ];
        foreach ($users as $user) {
            User::create([
                'firstname' => $user['firstname'],
                'lastname' => $user['lastname'],
                'gender' => $user['gender'],
                'country' => $user['country'],
                'is_admin' => $user['is_admin'],
                'email' => $user['email'],
                'password' => Hash::make($user['password'])
            ]);
        }
    }
}
