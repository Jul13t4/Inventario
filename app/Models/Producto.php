<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
