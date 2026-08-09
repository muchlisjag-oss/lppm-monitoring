<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Reset permission cache
        app(PermissionRegistrar::class)
            ->forgetCachedPermissions();

        $permissions = [

            /*
            |--------------------------------------------------------------------------
            | User Management
            |--------------------------------------------------------------------------
            */

            'user.view',
            'user.create',
            'user.update',
            'user.delete',


            /*
            |--------------------------------------------------------------------------
            | Role Management
            |--------------------------------------------------------------------------
            */

            'role.view',
            'role.create',
            'role.update',
            'role.delete',


            /*
            |--------------------------------------------------------------------------
            | Permission Management
            |--------------------------------------------------------------------------
            */

            'permission.view',
            'permission.create',
            'permission.update',
            'permission.delete',


            /*
            |--------------------------------------------------------------------------
            | System
            |--------------------------------------------------------------------------
            */

            'setting.view',
            'setting.update',
        ];

        foreach ($permissions as $permission) {

            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web',
            ]);

        }

        // Reset permission cache
        app(PermissionRegistrar::class)
            ->forgetCachedPermissions();
    }
}