<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genero;

class Persona extends Model
{
    use HasFactory;
    const ACTIVO = 1;
    const INACTIVO = 0;

    //RELACIÓN UNO A MUCHOS INVERSA CON TIPO DE DOCUMENTOS
    public function doc_ident_tipo(){
        return $this->belongsTo(Doc_ident_tipo::class);
    }

    //RELACIÓN UNO A MUCHOS INVERSA CON GENEROS
    public function genero(){
        return $this->belongsTo(Genero::class);
    }

}
