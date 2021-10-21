<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!User::where('email', 'admin@admin.com')->first()) {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('ad_password'),
            ]);
        };

        if (!User::where('email', 'admin@lmnsbilling.com')->first()) {
            User::create([
                'name' => 'LMNS',
                'email' => 'admin@lmnsbilling.com',
                'password' => Hash::make('ad_password'),
            ]);
        };
    }
}
