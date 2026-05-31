<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table    = 'productos';
    protected $fillable = ['nombre', 'precio', 'usuario_id'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function getPrecioFormateadoAttribute()
    {
        return formatearPrecio($this->precio);
    }
}