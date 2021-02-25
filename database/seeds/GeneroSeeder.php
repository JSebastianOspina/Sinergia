<?php

use App\Genero;
use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genero = new Genero();
        $genero->nombre = 'Masculino';
        $genero->save();
        $genero = new Genero();
        $genero->nombre = 'Femenino';
        $genero->save();
    }
}
