<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ClasificacionProductos;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'producto';
    protected $primaryKey = 'id';
    protected $fillable = [
        'codigo',
        'elemento',
        'id_clasificacion'
    ]; 

    public function clasificacion()
    {
        return $this->belongsTo( ClasificacionProductos::class, 'id_clasificacion','id');
    }
}
