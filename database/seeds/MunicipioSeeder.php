<?php

use App\Departamento;
use App\Municipio;
use Illuminate\Database\Seeder;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departamentos = Departamento::all();
        foreach ($departamentos as $departamento) {
            for ($i = 1; $i <= 2; $i++) {
                $municipio = new Municipio();
                $municipio->nombre = 'Municipio ' . $i . ' del departamento ' . $departamento->nombre;
                $municipio->departamento_id = $departamento->id;
                $municipio->save();
            }
        }
    }
}
