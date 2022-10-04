<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        \App\Models\User::create([
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'email' => 'admin@geexar.com',
            'password' => Hash::make('password'),
            'guard' => 'admin',
            'company_id' => null,
            'phone' => '01122907742',
            'pictur' => "/uploads/users/1664919475project-1.jpg",
        ]);

        \App\Models\Company::create([
            'name' => 'Geexar',
            'email' => 'admin@geexar.com',
            'logo' => "/uploads/users/1664919475project-1.jpg",
        ]);
    }
}
