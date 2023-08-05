<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LandlordUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $landlordUser = User::create([
            'first_name' => 'Landlord',
            'last_name' => 'User',
            'username' => '@landlord',
            'email' => 'landlord@propertify.com',
            'password' => bcrypt('landlord123'),
            'email_verified_at' => now(),
        ]);
        User::find($landlordUser->id)->assignRole('landlord');
    }
}
