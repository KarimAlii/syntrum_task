<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => 'Project Admin',
            'email' => 'admin@info.com',
            'password' => Hash::make('password'),
            'role_id'=>'1'
        ]);
        DB::table('users')->insert([
            'name' => 'Project Moderator',
            'email' => 'moderator@info.com',
            'password' => Hash::make('password'),
            'role_id'=>'2'
        ]);

    }
}
