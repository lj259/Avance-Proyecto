<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $hotel;
    public $ubicacion;
    public $estrellas;
    public $precio;
    public $disponibilidad;

    public function __construct($hotel,$ubicacion,$estrellas,$precio,$disponibilidad)
    {
        $this->hotel=$hotel;
        $this->ubicacion=$ubicacion;
        $this->estrellas=$estrellas;
        $this->precio=$precio;
        $this->disponibilidad=$disponibilidad;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
