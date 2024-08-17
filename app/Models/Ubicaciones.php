<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicaciones extends Model
{
    use HasFactory;

    protected $table = 'ubicaciones';

    public $timestamps = false;

    protected $primaryKey = 'ubicacion_id';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'nombre_ubicacion',
        'costo_envio'
    ];
}
