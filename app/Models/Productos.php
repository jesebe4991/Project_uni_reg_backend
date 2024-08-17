<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $table = 'productos';

    public $timestamps = false;

    protected $primaryKey = 'producto_id';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'nombre',
        'descripcion',
        'categoria_id',
        'precio_unitario',
        'stock_disponible',
        'descuento_por_cantidad'
    ];
}
