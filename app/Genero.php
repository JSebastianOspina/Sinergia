<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    public function pacientes(){
        return $this->hasMany(Paciente::class);
    }
}
