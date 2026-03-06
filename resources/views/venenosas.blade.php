@extends('layouts.layout')

@section('contenido')

<h2>Serpientes Venenosas</h2>

<div class="galeria">

<x-tarjeta 
titulo="Cobra"
imagen="images/cobra.jpg"
descripcion="Serpiente venenosa conocida por su capucha."
/>

<x-tarjeta 
titulo="Mamba Negra"
imagen="images/mamba.jpg"
descripcion="Una de las serpientes más rápidas y peligrosas del mundo."
/>

<x-tarjeta 
titulo="Víbora de Cascabel"
imagen="images/cascabel.jpg"
descripcion="Reconocida por el sonido de su cascabel."
/>

</div>

@endsection