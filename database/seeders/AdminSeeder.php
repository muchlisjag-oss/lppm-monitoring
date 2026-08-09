<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Create Super Admin
        |--------------------------------------------------------------------------
        */

        $user = User::firstOrCreate(

            [
                'email' => 'admin@lppm.ac.id'
            ],

            [
                'name' => 'Super Administrator',

                'password' => Hash::make('password')
            ]

        );

        /*
        |--------------------------------------------------------------------------
        | Assign Role
        |--------------------------------------------------------------------------
        */

        if (! $user->hasRole('Super Admin')) {

            $user->assignRole('Super Admin');

        }
    }
}