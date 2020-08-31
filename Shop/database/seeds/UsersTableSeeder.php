<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'admin', 'email' => 'a@gmail.com', 'password' => '123', 'phone' => '0779803198', 'address' => 'f3/31'],
            ['name' => 'luan', 'email' => 'aa@gmail.com', 'password' => '123', 'phone' => '0123456789', 'address' => 'Nguyen si sach'],
            ['name' => 'hung', 'email' => 'aaa@gmail.com', 'password' => '123', 'phone' => '0123456788', 'address' => 'Binh Chanh'],
            ['name' => 'phong', 'email' => 'aaaa@gmail.com', 'password' => '123', 'phone' => '0123456787', 'address' => 'Hoc Mon'],
        ]);
    }
}
