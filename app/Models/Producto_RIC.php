<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto_RIC extends Model
{
    use HasFactory;

    protected $table = 'productos_ric'; // nombre exacto de tu tabla
    protected $fillable = ['nombre', 'descripcion', 'precio', 'stock'];
}
