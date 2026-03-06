<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriaController extends Controller
{
public function index()
    {
    $serpientes = [
        [
            "titulo" => "Cobra",
            "imagen" => "images/cobra.jpg",
            "descripcion" => "Una serpiente venenosa muy conocida."
        ],
        [
            "titulo" => "Mamba Negra",
            "imagen" => "images/mamba.jpg",
            "descripcion" => "Una de las serpientes más rápidas y peligrosas."
        ],
        [
            "titulo" => "Boa Constrictor",
            "imagen" => "images/boa.jpg",
            "descripcion" => "Una serpiente constrictora muy fuerte."
        ]
    ];

    return view('galeria', compact('serpientes'));
    }
}