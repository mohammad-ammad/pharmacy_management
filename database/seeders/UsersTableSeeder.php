<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create an admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => 1, 
        ]);

        // Create two regular users
        User::create([
            'name' => 'Doctor',
            'email' => 'doctor@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => 2, 
        ]);

        User::create([
            'name' => 'Patient',
            'email' => 'patient@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => 3,
        ]);
    }
}
