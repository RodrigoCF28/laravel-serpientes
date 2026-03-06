@extends('layouts.layout')

@section('contenido')

<h2>Galería de Serpientes</h2>

<<div class="galeria">

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

<x-tarjeta 
titulo="Boa Constrictor"
imagen="images/boa.jpg"
descripcion="Una serpiente constrictora muy fuerte."
/>
</div>

@endsection