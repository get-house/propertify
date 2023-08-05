<?php

namespace Database\Seeders;

use App\Enums\RolesEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminUser = User::create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'username' => '@admin',
            'email' => 'admin@propertify.com',
            'password' => bcrypt('admin123'),
            'email_verified_at' => now(),

        ]);
        User::find($adminUser->id)->assignRole('admin');
    }
}
