<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';
    
    public $timestamps = false;

    protected $primaryKey = 'categoria_id';


    protected $fillable = [
        'nombre_categoria'
    ];
}
