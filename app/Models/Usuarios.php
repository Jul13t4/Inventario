<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'apellido',
        'cargo',
        'area',
        'correo',
        'cedula'
    ];  

    protected $appends = ['name'];

    public function getNameAttribute() 
    { 
        return $this->nombre . ' ' . $this->apellido; 
    }
}
