<?php

use Illuminate\Database\Seeder;

class BillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bills')->insert([
            ['id' => 1, 'id_customer' => 1, 'id_employee' => '1', 'customer_name' => 'Thùy Tâm', 'address' => 'Thăng Bình Quảng Nam', 'email' => 'nguyenthuytam16@gmail.com', 'phone' => '0389875179',  'status' =>'0', 'total'=>'3','note'=>''],
            ['id' => 2, 'id_customer' => 2, 'id_employee' => '2', 'customer_name' => 'Thu Thủy', 'address' => 'Tam Kì Quảng Nam', 'email' => 'nguyenthuthuy1@gmail.com', 'phone' => '0389833179',  'status' =>'1', 'total'=>'2','note'=>''],
            ['id' => 3, 'id_customer' => 3, 'id_employee' => '3', 'customer_name' => 'Ánh Na', 'address' => 'Đà Nẵng', 'email' => 'anhna1@gmail.com', 'phone' => '0388613479',  'status' =>'0', 'total'=>'1','note'=>''],
            ['id' => 4, 'id_customer' => 4, 'id_employee' => '1', 'customer_name' => 'Minh Trí', 'address' => 'Hà Nội', 'email' => 'minhtri11@gmail.com', 'phone' => '0072357179',  'status' =>'1', 'total'=>'2','note'=>''],
        ]);

    }
}
