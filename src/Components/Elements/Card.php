<?php

namespace LaravelTemplate\LtAdminlte\Components\Elements;

use Illuminate\View\Component;

class Card extends Component
{
    public $title;

    /**
     * primary|success|info|danger|warning|secondary
     */
    public $type;

    public function __construct($title = null, $type = null)
    {
        $this->title = $title;
        $this->type = $type;
    }

    public function render()
    {
        return view('lt-adminlte::components.elements.card');
    }
}
