<?php

namespace App\Models\Qr;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class qrComentario extends Model
{
    use HasFactory;
    const ACTIVO = 1;
    const INACTIVO = 0;
}
