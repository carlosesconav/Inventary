<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{

    public function run()
    {
      $role1 = Role::create(['name'=>'admin']);
      $role2 = Role::create(['name'=>'cliente']);
      $role3 = Role::create(['name'=>'proveedor']);

      $rolesP = [$role1, $role3];
      $rolesAll = [$role1, $role2,$role3];
      $rolesC = [$role2, $role3];
      $rolesA = [$role1, $role2];

      //Permisos del home
      Permission::create(['name'=>'admin.home'])->assignRole($role1);
      Permission::create(['name'=>'cliente.home'])->syncRoles($rolesC);

      //Permisos de productos
      Permission::create(['name'=>'proveedor.item.index'])->syncRoles($rolesP);
      Permission::create(['name'=>'proveedor.item.create'])->syncRoles($rolesP);
      Permission::create(['name'=>'proveedor.item.store'])->syncRoles($rolesP);
      Permission::create(['name'=>'proveedor.item.edit'])->syncRoles($rolesP);
      Permission::create(['name'=>'proveedor.item.update'])->syncRoles($rolesP);
      Permission::create(['name'=>'proveedor.item.delete'])->syncRoles($rolesP);

      Permission::create(['name'=>'proveedor.state.index'])->syncRoles($rolesA);
      Permission::create(['name'=>'proveedor.state.check'])->syncRoles($rolesA);

      //Permisos de usuario
      Permission::create(['name'=>'admin.user.index'])->assignRole($role1);
      Permission::create(['name'=>'admin.user.create'])->assignRole($role1);
      Permission::create(['name'=>'admin.user.edit'])->assignRole($role1);
      Permission::create(['name'=>'admin.user.delete'])->assignRole($role1);

      Permission::create(['name'=>'cliente.item.index'])->syncRoles($rolesAll);
      Permission::create(['name'=>'cliente.item.create'])->syncRoles($rolesA);
      Permission::create(['name'=>'cliente.item.store'])->syncRoles($rolesA);
      Permission::create(['name'=>'cliente.item.edit'])->syncRoles($rolesA);
      Permission::create(['name'=>'cliente.item.update'])->syncRoles($rolesA);
      Permission::create(['name'=>'cliente.item.delete'])->syncRoles($rolesA);

    }
}
