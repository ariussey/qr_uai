<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultade extends Model
{
    use HasFactory;

    const ACTIVO = 1;
    const INACTIVO = 0;

    //RELACIÓN UNO A MUCHOS CON PROGRAMAS
    public function programas(){
        return $this->hasMany(Programa::class);
    }

    //RELACIÓN UNO A MUCHOS INVERSA CON SEDES
    public function sede(){
        return $this->belongsTo(Sede::class);
    }
}
