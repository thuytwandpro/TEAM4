<?php

use Illuminate\Database\Seeder;

class DetailbillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detailbills')->insert([
            ['id' => 1, 'id_bill' => 1, 'id_product' => 1, 'quantity' => 2, 'price' => '1200000', 'amount' => '2160000'],
            ['id' => 2, 'id_bill' => 2, 'id_product' => 1, 'quantity' => 3, 'price' => '1200000', 'amount' => '3240000'],
            ['id' => 3, 'id_bill' => 3, 'id_product' => 3, 'quantity' => 1, 'price' => '800000', 'amount' => '640000'],
            ['id' => 4, 'id_bill' => 4, 'id_product' => 5, 'quantity' => 2, 'price' => '500000', 'amount' => '900000'],
        ]);
    }
}
