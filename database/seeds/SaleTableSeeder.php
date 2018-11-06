<?php

use Illuminate\Database\Seeder;

class SaleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
            ['id' => 1, 'percent' => '10', 'start_date' => '18-11-03', 'end_date' => '18-11-10'],
            ['id' => 2, 'percent' => '30', 'start_date' => '18-12-05', 'end_date' => '18-12-10'],
            ['id' => 3, 'percent' => '20', 'start_date' => '18-9-01', 'end_date' => '18-9-3'],
            ['id' => 4, 'percent' => '50', 'start_date' => '18-12-19', 'end_date' => '18-12-22'],
        ]);
    }
}
