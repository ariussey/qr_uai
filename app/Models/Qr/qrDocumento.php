<?php

namespace App\Models\Qr;

use App\Models\Programa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class qrDocumento extends Model
{
    use HasFactory;
    const ACTIVO = 1;
    const INACTIVO = 0;

    //RELACIÓN UNO A MUCHOS INVERSA CON QRDOCUMENTO TIPOS
    public function qrdocumento_tipo(){
        return $this->belongsTo(qrDocumento_tipo::class);
    }

    //RELACIÓN UNO A MUCHOS INVERSA CON PROGRAMAS
    public function programa(){
        return $this->belongsTo(Programa::class);
    }

}
