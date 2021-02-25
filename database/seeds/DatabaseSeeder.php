<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DepartmentSeeder::class);
        $this->call(MunicipioSeeder::class);
        $this->call(TiposDocumentoSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(GeneroSeeder::class);
        $this->call(PacienteSeeder::class);


    }
}
