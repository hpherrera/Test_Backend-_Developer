<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetalleCompra;
use App\Compra;
use Illuminate\Support\Facades\DB;

class CompraController extends Controller
{
    public function index()
    {
        $compras = DB::table('compras')
        ->join('detalle_compras', 'compras.id', '=', 'detalle_compras.Id_Compra');

        $compras_por_categoria = DB::table('categorias')
        ->join('detalle_compras', 'categoria.id' ,'=', 'detalle_compra.IdCategoria')
        ->sum('detalle_compras.Precio');

    	return view('compra.index',compact('compras'));
    }
}
