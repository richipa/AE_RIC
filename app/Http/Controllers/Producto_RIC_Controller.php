<?php

namespace App\Http\Controllers;

use App\Models\Producto_RIC;
use Illuminate\Http\Request;

class Producto_RIC_Controller extends Controller
{
    // Mostrar todos los productos
    public function index()
    {
        // Recupera todos los registros de la tabla
        $productos = Producto_RIC::all();

        // Envía los datos a la vista
        return view('productos.index', compact('productos'));
    }

    public function show($id)
    {
        $producto = Producto_RIC::findOrFail($id);
        return view('productos.show', compact('producto'));
    }
}
