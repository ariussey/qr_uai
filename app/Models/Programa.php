<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;
    
    const ACTIVO = 1;
    const INACTIVO = 0;

    //RELACIÓN UNO A MUCHOS INVERSA CON FACULTADES
    public function facultade(){
        return $this->belongsTo(Facultade::class);
    }

    //RELACIÓN UNO A MUCHOS CON DOCUMENTOS
    public function documentos(){
        return $this->hasMany(qrDocumento::class);
    }

}
