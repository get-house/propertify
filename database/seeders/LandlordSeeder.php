<?php

namespace Database\Seeders;

use App\Enums\RolesEnum;
use App\Models\Landlord;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LandlordSeeder extends Seeder
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
        $landlord = Landlord::create();
        $landlordUser->update(['profile_id' => $landlord->id, 'profile_type' => Landlord::class]);
        $landlordUser->profile()->associate($landlord);
        User::find($landlordUser->id)->assignRole(RolesEnum::LANDLORD->value);
    }
}
