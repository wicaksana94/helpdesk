<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name'      => 'admin',
            'email'     => 'admin@gmail.com',
            'password'  => Hash::make('admin'),
            'level'     => 'admin'
        ]);

        DB::table('users')->insert([
            'name'      => 'user',
            'email'     => 'user@gmail.com',
            'password'  => Hash::make('user'),
            'level'     => 'user'
        ]);
    }
}
