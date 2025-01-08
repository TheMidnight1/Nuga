<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Admin User
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('adminlogin@123'),
        ]);

        // Create Nuga User
        User::create([
            'name' => 'Nuga',
            'email' => 'nuga@gmail.com',
            'password' => Hash::make('nugapassword@123'),
        ]);
    }
}
