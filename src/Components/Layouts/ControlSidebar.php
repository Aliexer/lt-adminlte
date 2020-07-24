<?php

namespace LaravelTemplate\LtAdminlte\Components\Layouts;

use Illuminate\View\Component;

class ControlSidebar extends Component
{
    /* array([ 'title' => 'url']) */
    public $items = [];

    public function __construct($items = [])
    {
        $this->items = $items;
    }

    public function render()
    {
        return view('lt-adminlte::components.layouts.control-sidebar');
    }
}
