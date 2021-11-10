<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role1=Role::create(['name'=>'Admin']);
        $role1=Role::create(['name'=>'Cliente']);

        Permission::create(['name'=>'articulo.create'])->assignRole($role1);
        Permission::create(['name'=>'articulo.edit'])->assignRole($role1);
        Permission::create(['name'=>'articulo.destroy'])->assignRole($role1);
    }
}
