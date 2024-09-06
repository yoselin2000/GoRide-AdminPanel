<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'yos',
            'email' => 'yos@gmail.com',
            'password' => Hash::make('123'),
            'role_id' => 1, 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
