<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfile extends Model
{
    use HasFactory;

    //RELACIÓN UNO A MUCHOS INVERSA CON USUARIOS
    public function user(){
        return $this->belongsTo(User::class);
    }
}
