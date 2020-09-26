<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = Role::create(['name' => 'superadmin']);
        $admin = Role::create(['name' => 'admin']);
        $editor = Role::create(['name' => 'editor']);
        $user = Role::create(['name' => 'user']);


        $permissions = [

          //Dashboard
          'dashboard.view',

          //blog permissions
          'blog.create',
          'blog.view',
          'blog.edit',
          'blog.delete',
          'blog.approve',

          //admin permissions
          'admin.create',
          'admin.view',
          'admin.edit',
          'admin.delete',
          'admin.approve',

          //role permissions
          'role.create',
          'role.view',
          'role.edit',
          'role.delete',
          'role.approve',


          //profile permissions
          'profile.create',
          'profile.view'

        ];

        for($i=0;   $i<count($permissions);$i++){

          $permission = Permission::create(['name' => $permissions[$i]]);
          $superadmin->givePermissionTo($permission);
          $permission->assignRole($superadmin);
        }

    }
}
