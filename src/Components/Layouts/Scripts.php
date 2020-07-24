<?php

namespace LaravelTemplate\LtAdminlte\Components\Layouts;

use Illuminate\View\Component;

class Scripts extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('lt-adminlte::components.layouts.scripts');
    }
}
