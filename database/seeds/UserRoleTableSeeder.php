<?php

use Illuminate\Database\Seeder;

class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert([
            ['id' => 1, 'id_role' => 1, 'id_user' => 1],
            ['id' => 2, 'id_role' => 2, 'id_user' => 2],
            ['id' => 3, 'id_role' => 3, 'id_user' => 3],
        ]);
    }
}
