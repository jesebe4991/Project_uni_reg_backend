<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;
    protected $table = 'pedidos';
    
    public $timestamps = false;

    protected $primaryKey = 'pedido_id';


    protected $fillable = [
        'usuario_id',
        'fecha_pedido',
        'ubicacion_envio',
        'costo_envio',
        'total_bruto',
        'total_descuentos',
        'total_iva',
        'total_neto'
    ];
}
