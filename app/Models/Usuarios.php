<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected$table = 'usuarios';

    public $timestamps = false;

    protected$primaryKey = 'usuario_id';

    public$incrementing = true;

    protected$keyType = 'int';

    protected$fillable = [
        'nombre_usuario',
        'correo_electronico',
        'contraseña',
        'rol'
    ];

    protected$hidden = [
        'contraseña',
        'remember_token',
    ];

    protected $casts = [
        'correo_electronico_verified_at' => 'datetime',
    ];
}
