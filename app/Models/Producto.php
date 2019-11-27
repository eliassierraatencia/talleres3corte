<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = [
        'descripcion',
        'precio',
        'proveedor_id',
        'categoria'
    ];

    public function caracteristicas()
    {
        return $this->hasMany('App\Models\Caracteristica');
    }

    public function proveedor()
    {
        return $this->belongsTo('App\Models\Proveedor');
    }

}
