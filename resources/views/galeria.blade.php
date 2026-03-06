@extends('layouts.layout')

@section('contenido')
    <h2>Galería de Serpientes</h2>

    @php
        $familias = [
            'boidae' => [
                'nombre' => 'Boidae',
                'descripcion' => 'Familia de Boas.',
                'imagen' => 'images/boa.jpg',
                'especies' => [
                    [
                        'comun' => 'Boa constrictor',
                        'cientifico' => 'Boa constrictor',
                        'imagen' => 'images/boaconstrictor.jpg',
                        'descripcion' => 'Una serpiente constrictora muy fuerte.',
                    ],
                    [
                        'comun' => 'Boa imperator',
                        'cientifico' => 'Boa imperator',
                        'imagen' => 'images/boaimperator.jpg',
                        'descripcion' => 'Una de las boas más conocidas y comunes en cautiverio.',
                    ],
                    [
                        'comun' => 'Boas esmeralda',
                        'cientifico' => 'Corallus batesii',
                        'imagen' => 'images/boaesmeralda.jpg',
                        'descripcion' => 'Boas arborícolas con colores vibrantes.',
                    ],
                ],
            ],
        ];
    @endphp

    <p>Selecciona la familia para ver sus especies.</p>

    <div class="galeria">
        @foreach($familias as $slug => $familia)
            <x-familia-tarjeta
                slug="{{ $slug }}"
                titulo="{{ $familia['nombre'] }}"
                imagen="{{ $familia['imagen'] }}"
                descripcion="{{ $familia['descripcion'] }}"
            />

            <div class="especies" data-family="{{ $slug }}" hidden>
                <div class="galeria">
                    @foreach($familia['especies'] as $especie)
                        <x-tarjeta
                            titulo="{{ $especie['comun'] }} (<em>{{ $especie['cientifico'] }}</em>)"
                            imagen="{{ $especie['imagen'] }}"
                            descripcion="{{ $especie['descripcion'] }}"
                        />
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
@endsection
