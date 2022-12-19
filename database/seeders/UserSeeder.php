<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

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
                'name'     => "admin",
                'email'    => 'admin@gmail.com',
                'role_id' => 1,
                'password' => bcrypt(123456789),
            ],
            [
                'name'      => "user",
                'email'     => 'user@gmail.com',
                'role_id'  => 3,
                'password'  => bcrypt(123456789),
                ],
        ];
        User::insert($users);
    }
}
