<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CreateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
            ['name' => 'admin', 'display_name' => 'Quan tri he thong'],
            ['name' => 'guest', 'display_name' => 'khach hang'],
            ['name' => 'dev', 'display_name' => 'phat trien he thong'],
            ['name' => 'content', 'display_name' => 'chinh sua noi dung'],
        ]);
    }
}
