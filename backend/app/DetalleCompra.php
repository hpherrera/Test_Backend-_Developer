<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    protected $fillable = ['Nombre','Precio'];

    public function compra()
    {
    	return $this->belongsToMany('App\Compra', 'Id_Compra');
    }

    public function categoria()
    {
    	return $this->belongsToMany('App\Categoria', 'Id_Categoria');
    }
}
