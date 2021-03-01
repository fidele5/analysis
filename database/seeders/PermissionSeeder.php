<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(["name" => "manage_utils"]);
        Permission::create(["name" => "manage_component"]);
        Permission::create(["name"=> "manage_settings"]);

        $role = Role::where('name', 'Super Admin')->first();
        $role->givePermissionTo(Permission::all());

    }
}
