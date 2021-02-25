<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    public function departamento(){
        return $this->belongsTo(Departamento::class);
    }
    public function pacientes(){
        return $this->hasMany(Paciente::class);
    }
}
