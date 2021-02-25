<?php

use App\Tipos_documento;
use Illuminate\Database\Seeder;

class TiposDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos_documento = new Tipos_documento();
        $tipos_documento->nombre = 'Cedula';
        $tipos_documento->save();

        $tipos_documento = new Tipos_documento();
        $tipos_documento->nombre = 'NIT';
        $tipos_documento->save();

    }
}
