<?php

namespace App\Models\Qr;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class qrDocumento_tipo extends Model
{
    use HasFactory;
    const ACTIVO = 1;
    const INACTIVO = 0;

    //RELACIÓN UNO A MUCHOS CON DOCUMENTOS
    public function documentos(){
        return $this->hasMany(qrDocumento::class);
    }
}
