<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin Sarjis Abdullah',
            'role_id' => 1,
            'email' => 'psarjis@gmail.com',
            'password' => Hash::make('psarjis@gmail.com'),
        ]);

        DB::table('users')->insert([
            'name' => 'User Sarjis Abdullah',
            'role_id' => 2,
            'email' => 'sarjis@gmail.com',
            'password' => Hash::make('sarjis@gmail.com'),
        ]);
    }
}
