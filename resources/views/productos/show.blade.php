@extends('layouts.base')

@section('title', $producto->nombre)

@section('content')
<h2>{{ $producto->nombre }}</h2>
<p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
<p><strong>Precio:</strong> {{ $producto->precio }} €</p>
<p><strong>Stock:</strong> {{ $producto->stock }}</p>

<a href="{{ route('productos.index') }}">← Volver al listado</a>
@endsection
