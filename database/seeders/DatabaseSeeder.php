<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //1st admin account
        User::create([
            'username' => 'admin',
            'name' => 'admin',
            'email' => 'admin@imix-project.com',
            'password' => Hash::make('admin'),
            'userType' => User::$Admin,
        ]);
        //1st staff account
        User::create([
            'username' => 'thaz_staff',
            'name' => 'staff',
            'email' => 'staff@imix-project.com',
            'password' => Hash::make('123456789'),
            'userType' => User::$Staff,
        ]);
        //1st staff account
        User::create([
            'username' => 'thaz_hr',
            'name' => 'HR',
            'email' => 'HR@imix-project.com',
            'password' => Hash::make('123456789'),
            'userType' => User::$HR,
        ]);
    }
}
