@extends('layouts.layout')

@section('contenido')
    <div class="w3-row w3-padding">
        <div class="w3-half w3-container">

            <h1 class="w3-xxlarge w3-text-black">Explora</h1>
            <h1 class="w3-xxlarge w3-text-black">El Mundo de las</h1>
            <h1 class="w3-jumbo">Serpientes</h1>

        </div>

    <div class="w3-half w3-container w3-xlarge w3-text-black">

        <p>
            Las serpientes son reptiles fascinantes que habitan
            en diferentes ecosistemas del planeta.
        </p>

        <p>
            Explora galerías y aprende sobre especies venenosas.
        </p>

    </div>
        <p>
            Las serpientes son reptiles increíbles que habitan en casi todo el planeta.
            En esta página podrás explorar diferentes especies, aprender sobre serpientes
            venenosas y observar una galería de algunas de las más impresionantes.
        </p>

    @if (request()->is('/'))
        <div class="banner">
            <h2>Descubre el Fascinante Mundo de las Serpientes</h2>
        </div>
    @endif

@endsection
