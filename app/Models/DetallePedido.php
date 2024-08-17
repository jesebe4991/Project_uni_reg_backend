<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    use HasFactory;

    protected $table = 'detallespedido';
    
    public $timestamps = false;

    protected $primaryKey = 'categoria_id';


    protected $fillable = [
        'detalle_id',
        'pedido_id',
        'producto_id',
        'cantidad',
        'subtotal'
    ];
}
