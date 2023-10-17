<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleSuper = Role::create(['name' => 'super_admin']);
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleSales = Role::create(['name' => 'sales']);
        $permissionSuper = [
            'can.read.user',
            'can.edit.user',
            'can.delete.user',
            'can.create.user',
            'can.read.catalog',
            'can.edit.catalog',
            'can.delete.catalog',
            'can.create.catalog',
            'can.read.menu',
            'can.edit.menu',
            'can.delete.menu',
            'can.create.menu',
            'can.read.media',
            'can.edit.media',
            'can.delete.media',
            'can.create.media',
        ];
        $permissionAdmin = [
            'can.read.user',
            'can.edit.user',
            'can.create.user',
            'can.read.catalog',
            'can.edit.catalog',
            'can.create.catalog',
            'can.read.menu',
            'can.edit.menu',
            'can.create.menu',
            'can.read.media',
            'can.edit.media',
            'can.create.media',
        ];
        foreach ($permissionSuper as $item) {
            $permission = Permission::firstOrCreate(['name' => $item]);
            $roleSuper->givePermissionTo($permission);
            $permission->assignRole($roleSuper);
        }
        foreach ($permissionAdmin as $item) {
            $permission = Permission::firstOrCreate(['name' => $item]);
            $roleAdmin->givePermissionTo($permission);
            $permission->assignRole($roleAdmin);
        }
    }
}
