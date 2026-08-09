<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        app(PermissionRegistrar::class)
            ->forgetCachedPermissions();

        $rolePermissions = [

            'Super Admin' => [

                'user.view',
                'user.create',
                'user.update',
                'user.delete',

                'role.view',
                'role.create',
                'role.update',
                'role.delete',

                'permission.view',
                'permission.create',
                'permission.update',
                'permission.delete',

                'setting.view',
                'setting.update',
            ],

            'Admin LPPM' => [

                'user.view',
                'user.create',
                'user.update',
                'user.delete',
            ],

            'Reviewer' => [],

            'Dosen' => [],

            'Ketua LPPM' => [],

            'Pimpinan' => [],
        ];

        foreach ($rolePermissions as $roleName => $permissions) {

            $role = Role::findByName(
                $roleName,
                'web'
            );

            $role->syncPermissions($permissions);
        }

        app(PermissionRegistrar::class)
            ->forgetCachedPermissions();
    }
}