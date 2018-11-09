<?php

use Illuminate\Database\Seeder;

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
            ['id' => 1, 'name' => 'Tam', 'phone' => '0389875179', 'address' => 'Thăng Bình Quảng Nam', 'email' => 'nguyenthuytam16@gmail.com', 'username' => 'tamtam', 'password' => bcrypt(123), 'avatar' => ''],
            ['id' => 2, 'name' => 'Phuong', 'phone' => '0344505663', 'address' => 'Thăng Bình Quảng Nam', 'email' => 'tranphuong18@gmail.com', 'username' => 'phuongphuong', 'password' =>  bcrypt(123), 'avatar' => ''],
            ['id' => 3, 'name' => 'Yen', 'phone' => '0323565787', 'address' => 'Tam Kỳ Quảng Nam', 'email' => 'nguyenyen1@gmail.com', 'username' => 'yenyen', 'password' =>  bcrypt(123), 'avatar' => ''],
        ]);
    }
}
