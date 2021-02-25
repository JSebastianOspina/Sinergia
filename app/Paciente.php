<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    public function tipos_documento(){
        return $this->hasOne(Tipos_documento::class);
    }
    public function genero(){
        return $this->belongsTo(Genero::class);
    }
    public function departamento(){
        return $this->belongsTo(Departamento::class);
    }
    public function municipio(){
        return $this->belongsTo(Municipio::class);
    }
}
