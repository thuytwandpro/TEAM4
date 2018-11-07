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
            ['id' => 1, 'name' => 'Nike', 'slug' => 'nike'],
            ['id' => 2, 'name' => 'Sneakers', 'slug' => 'sneakers'],
            ['id' => 3, 'name' => 'Converses', 'slug' => 'converses'],
            ['id' => 4, 'name' => 'Adidas', 'slug' => 'adidas'],
            ['id' => 5, 'name' => 'Vans', 'slug' => 'vans'],
            ['id' => 6, 'name' => 'Boots', 'slug' => 'boots'],
        ]);
    }
}
