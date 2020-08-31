<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CreateSeeder::class);
        $this->call(CreatePermission::class);
        $this->call(PermissionRoleSeeder::class);
        $this->call(RoleUserSeeder::class);
    }
}
