<?php

use App\Departamento;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {

            $department = new Departamento();
            $department->nombre = 'Departamento ' . $i;
            $department->save();
        }
    }
}
