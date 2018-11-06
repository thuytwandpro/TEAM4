<?php

use Illuminate\Database\Seeder;

class EmployeeRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_roles')->insert([
            ['id' => 1, 'id_role' => 2, 'id_employee' => 1],
            ['id' => 2, 'id_role' => 2, 'id_employee' => 2],
            ['id' => 3, 'id_role' => 1, 'id_employee' => 3],
        ]);
    }
}
