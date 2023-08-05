<?php

namespace Database\Seeders;

use App\Enums\RolesEnum;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;



class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        collect(RolesEnum::getConstants())->map(function ($role) {
            $userRole = Role::firstOrCreate(['name' => $role], ['name' => $role]);

            if ($role === RolesEnum::LANDLORD) {
                $this->assignLandlordPermissions(role: $userRole);
            } elseif ($role === RolesEnum::ADMIN) {
                $userRole->syncPermissions(Permission::all());
            }
        });
    }

    private function assignLandlordPermissions(Role $role): void
    {
        // assign permission to landlord role
        $role->syncPermissions([
            'create_property',
            'update_property',
            'delete_property',
            'view_property',
        ]);
    }

}
