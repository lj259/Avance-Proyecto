<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class formularios extends Component
{
    public $campos;
    public $ruta;
    public $metodo;

    public function __construct($campos,$ruta,$metodo)
    {
        $this->campos = $campos;
        $this->ruta = $ruta;
        $this->metodo = $metodo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.formularios');
    }
}
