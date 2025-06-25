<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            'super_admin',
            'admin',
            'editor',
            'viewer',
        ];

        $permissions = [
            'view posts',
            'edit posts',
            'delete posts',
            'create posts',
        ];

        // Buat permission
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Buat role dan assign permission
        foreach ($roles as $roleName) {
            $role = Role::firstOrCreate(['name' => $roleName]);

            if ($roleName === 'super_admin') {
                $role->syncPermissions(Permission::all());
            } elseif ($roleName === 'admin') {
                $role->syncPermissions(['view posts', 'edit posts', 'create posts']);
            } elseif ($roleName === 'Petugas_parkir') {
                $role->syncPermissions(['view posts', 'edit posts']);
            } elseif ($roleName === 'user') {
                $role->syncPermissions(['view posts']);
            }
        }
    }
}
