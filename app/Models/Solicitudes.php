<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;

class Solicitudes extends Model
{
    use HasFactory;

    protected $table = 'solicitudes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_usuario',
        'codigo',
        'id_producto',
        'dependencia_soli',
        'cantidad_soli',
        'cantidad_entre',
        'recibido_por',
        'estado'  
    ]; 

    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_solicitud','id');
        
    }
}
