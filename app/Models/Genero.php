<?php

namespace App\Models;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    //RELACIÓN UNO A MUCHOS CON PERSONAS
    public function personas(){
        return $this->hasMany(Persona::class);
    }
}
