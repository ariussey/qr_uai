<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc_ident_tipo extends Model
{
    use HasFactory;

    //RELACIÓN UNO A MUCHOS CON PERSONAS
    public function personas(){
        return $this->hasMany(Persona::class);
    }
}
