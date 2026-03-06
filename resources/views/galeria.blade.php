@extends('layouts.layout')

@section('contenido')

<h2>Galería de Serpientes</h2>

<div class="galeria">

@foreach ($serpientes as $serpiente)

<x-tarjeta 
    :titulo="$serpiente['titulo']"
    :imagen="$serpiente['imagen']"
    :descripcion="$serpiente['descripcion']"
/>

@endforeach

</div>

@endsection