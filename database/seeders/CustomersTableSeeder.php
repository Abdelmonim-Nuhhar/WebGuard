<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('customers')->insert([
            ['first_name' => 'John', 'last_name' => 'Doe', 'username' => 'john_doe1', 'password' => Hash::make('password'), 'email' => 'john.doe@example.com'],
            ['first_name' => 'Jane', 'last_name' => 'Bakry', 'username' => 'jane_doe2', 'password' => ('password2'), 'email' => 'jane.doe@example.com'],
            ['first_name' => 'Adam', 'last_name' => 'Hamodi', 'username' => 'john_doe3', 'password' => ('password3'), 'email' => '33.doe@example.com'],
            ['first_name' => 'Musa', 'last_name' => 'Hassan', 'username' => 'jane_doe4', 'password' => Hash::make('password'), 'email' => '44.doe@example.com'],
            ['first_name' => 'Sara', 'last_name' => 'Aleena', 'username' => 'john_doe5', 'password' => Hash::make('password'), 'email' => '55.doe@example.com'],
            ['first_name' => 'Hilme', 'last_name' => 'Messi', 'username' => 'jane_doe6', 'password' => Hash::make('password'), 'email' => '66.doe@example.com'],
            ['first_name' => 'Asma', 'last_name' => 'Patric', 'username' => 'john_doe7', 'password' => Hash::make('password'), 'email' => '77.doe@example.com'],
            ['first_name' => 'Enas', 'last_name' => 'Poon', 'username' => 'jane_doe8', 'password' => Hash::make('password'), 'email' => '88.doe@example.com'],

        ]);
    }
}
