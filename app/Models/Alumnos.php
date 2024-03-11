<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Usuarios;

class Alumnos extends Model
{
    use HasFactory;

    protected $table = 'alumnos';

    public function usuarios()
    {
        return $this->belongsTo(Usuarios::class, 'idUsuario');
    }
}
