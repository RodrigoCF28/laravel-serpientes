<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Tarjeta extends Component
{
    public $titulo;
    public $imagen;
    public $descripcion;

    public function __construct($titulo, $imagen, $descripcion)
    {
        $this->titulo = $titulo;
        $this->imagen = $imagen;
        $this->descripcion = $descripcion;
    }

    public function render()
    {
        return view('components.tarjeta');
    }
}