<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Departamento extends Model
{
    public function municipios(){
        return $this->HasMany(Municipio::class);
    }
    public function pacientes(){
        return $this->hasMany(Paciente::class);
    }
}
