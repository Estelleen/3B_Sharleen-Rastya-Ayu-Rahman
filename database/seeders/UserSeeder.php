<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(['name' => 'Sabrina', 'email' => 'admin@gmail.com', 'status' => 'active', 'role' => 'admin' ,'password'=> 'admin']);
        User::create(['name' => 'Carpenter', 'email' => 'tutor@gmail.com', 'status' => 'active', 'role' => 'tutor' ,'password'=> 'tutor']);
        User::create(['name' => 'Xavier', 'email' => 'student@gmail.com', 'status' => 'active', 'role' => 'student' ,'password'=> 'student']);
    }
}
