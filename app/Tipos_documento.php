<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipos_documento extends Model
{
    public function pacientes(){
        return $this->hasMany(Paciente::class);
    }
}
