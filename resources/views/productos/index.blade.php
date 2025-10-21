@extends('layouts.base')

@section('title', 'Listado de productos')

@section('content')
<h2>Listado de productos</h2>

@if($productos->isEmpty())
    <p>No hay productos disponibles.</p>
@else
    <ul>
        @foreach($productos as $producto)
            <li>
                <a href="{{ route('productos.show', $producto->id) }}">
                    {{ $producto->nombre }} - {{ $producto->precio }} €
                </a>
            </li>
        @endforeach
    </ul>
@endif
@endsection
