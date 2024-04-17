<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users= [
            ['name' => 'Anas', 'email' => 'anas@anas.com','password' => '1234', 'is_admin'=>true],
            ['name' => 'Abdel', 'email' => 'abdel@abdel.com','password' => '1234', 'is_admin'=>true],           
        ];

        foreach($users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
                'is_admin' => $user['is_admin'],
            ]);
        }

        User::factory()->count(1000)->create();


    }
}
