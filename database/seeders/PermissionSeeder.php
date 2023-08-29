<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Spatie\Permission\Models\Permission;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $this->getPermissions()->each(function ($permission) {
            Permission::create(['name' => $permission]);
        });

    }

    private function getPermissions(): Collection
    {
        return collect(config('propertify-permission'))->flatten();
    }


}
