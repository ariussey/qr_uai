<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use HasFactory;

    const ACTIVO = 1;
    const INACTIVO = 0;

    //RELACIÓN UNO A MUCHOS CON FACULTADES
    public function facultades(){
        return $this->hasMany(Facultade::class);
    }


}
