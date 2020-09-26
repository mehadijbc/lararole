<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //User::factory(10)->create();
        //UserSeeder::class,
        //UserSeeder::factory(10)->create();
        //UserSeeder::create()->create();
        //$students = factory(App\Models\User::class, 100)->create();
        $this->call([
                    RolePermissionSeeder::class


      ]);
        //$this->call(UserSeeder::class)->create();
    }
}
