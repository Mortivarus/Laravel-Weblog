<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => env('ADMIN_USERNAME'),
            'username' => env('ADMIN_USERNAME'),
            'email' => env('ADMIN_EMAIL'),
            'password' =>bcrypt(env('ADMIN_PASSWORD')),
            'premium' => TRUE
        ]);
    }
}
