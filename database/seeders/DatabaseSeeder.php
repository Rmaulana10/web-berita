<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
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
        user::create([
            'gambar' => 'user.png',
            'name' => 'Raihan',
            'email' => 'r@gmail.com',
            'password' => Hash::make('12345'),
            'jk' => 'L',
        ]);
    }
}
