<?php

namespace LaravelTemplate\LtAdminlte\Components\Layouts;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public function __construct()
    {
        
    }

    public function render()
    {
        return view('lt-adminlte::components.layouts.sidebar');
    }
}
