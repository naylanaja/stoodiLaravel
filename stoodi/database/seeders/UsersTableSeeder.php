<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'role_id'=> '1',
            'name' => 'Admin',
            'email'=> 'admin@gmail.com',
            'password'=> bcrypt ('admin'),
        ]);
        DB::table('users')->insert([
            'role_id'=> '2',
            'name' => 'teacher',
            'email'=> 'teacher@gmail.com',
            'password'=> bcrypt ('teacher'),
        ]);
        DB::table('users')->insert([
            'role_id'=> '3',
            'name' => 'Naja',
            'email'=> 'naja@gmail.com',
            'password'=> bcrypt ('12345678'),
        ]);
    }
}
