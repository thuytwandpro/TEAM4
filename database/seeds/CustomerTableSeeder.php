<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            ['id' => 1, 'name' => 'Thùy Tâm','username' => 'thuytam', 'password' => '123', 'email' => 'nguyenthuytam16@gmail.com', 'phone' => '0389875179', 'address' => 'Thăng Bình Quảng Nam'],
            ['id' => 2, 'name' => 'Thu Thủy','username' => 'thuthuy', 'password' => '123', 'email' => 'nguyenthuthuy1@gmail.com', 'phone' => '0389833179', 'address' => 'Tam Kì Quảng Nam'],
            ['id' => 3, 'name' => 'Ánh Na','username' => 'anhna', 'password' => '123', 'email' => 'anhna1@gmail.com', 'phone' => '0388613479', 'address' => 'Đà Nẵng'],
            ['id' => 4, 'name' => 'Minh Trí','username' => 'minhtri', 'password' => '123', 'email' => 'minhtri11@gmail.com', 'phone' => '0072357179', 'address' => 'Hà Nội'],
        ]);
    }
}
