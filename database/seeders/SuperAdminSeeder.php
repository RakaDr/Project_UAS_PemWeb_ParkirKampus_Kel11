<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        // Pastikan role super_admin ada
        $role = Role::firstOrCreate(['name' => 'super_admin']);

        // Pastikan user super admin ada
        $user = User::firstOrCreate(
            ['email' => 'superadmin@parkir.com'], // Ganti email jika perlu
            [
                'name' => 'Super Admin',
                'password' => bcrypt('12345678'), // Ganti password ini jadi aman ya!
            ]
        );

        // Assign role ke user
        if (!$user->hasRole($role->name)) {
            $user->assignRole($role);
            $this->command->info('Super admin role assigned to user: ' . $user->email);
        } else {
            $this->command->info('User already has super admin role: ' . $user->email);
        }
    }
}
