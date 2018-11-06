<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Nike', 'slug' => ''],
            ['id' => 2, 'name' => 'Sneakers', 'slug' => ''],
            ['id' => 3, 'name' => 'Converses', 'slug' => ''],
            ['id' => 4, 'name' => 'Adidas', 'slug' => ''],
            ['id' => 5, 'name' => 'Vans', 'slug' => ''],
            ['id' => 6, 'name' => 'Boots', 'slug' => ''],
        ]);
    }
}
