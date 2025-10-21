<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Producto_RIC_Controller;

// Cuando visites la raíz '/', se ejecutará el método index del controlador
Route::get('/', [Producto_RIC_Controller::class, 'index'])->name('productos.index');

// Ruta para ver el detalle de un producto
Route::get('/productos/{id}', [Producto_RIC_Controller::class, 'show'])->name('productos.show');
