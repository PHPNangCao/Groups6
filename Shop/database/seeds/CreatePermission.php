<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CreatePermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permission')->insert([
            ['name' => 'user-list', 'display_name' => 'quan ly user'],
            ['name' => 'user-add', 'display_name' => 'them user'],
            ['name' => 'user-edit', 'display_name' => 'sua user'],
            ['name' => 'user-delete', 'display_name' => 'xoa user'],

            ['name' => 'role-list', 'display_name' => 'quan ly role'],
            ['name' => 'role-add', 'display_name' => 'them role'],
            ['name' => 'role-edit', 'display_name' => 'sua role'],
            ['name' => 'role-delete', 'display_name' => 'xoa role'],

            ['name' => 'permission-list', 'display_name' => 'quan ly phan quyen'],
            ['name' => 'permission-add', 'display_name' => 'them phan quyen'],
            ['name' => 'permission-edit', 'display_name' => 'sua phan quyen'],
            ['name' => 'permission-delete', 'display_name' => 'xoa phan quyen'],

            ['name' => 'product-list', 'display_name' => 'quan ly san pham'],
            ['name' => 'product-add', 'display_name' => 'them san pham'],
            ['name' => 'product-delete', 'display_name' => 'xoa san pham'],
            ['name' => 'product-edit', 'display_name' => 'xoa sua san pham'],

            ['name' => 'content-list', 'display_name' => 'quan ly bai viet'],
            ['name' => 'content-add', 'display_name' => 'them bai viet'],
            ['name' => 'content-edit', 'display_name' => 'sua bai viet'],
            ['name' => 'content-delete', 'display_name' => 'xoa bai viet'],
        ]);
    }
}
