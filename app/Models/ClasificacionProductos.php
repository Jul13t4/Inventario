<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClasificacionProductos extends Model
{
    use HasFactory;
    protected $table = 'clasificacion_productos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'producto',
        'estado',
        'estado_1'
    ]; 
}
