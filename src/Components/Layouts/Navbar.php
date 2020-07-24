<?php

namespace LaravelTemplate\LtAdminlte\Components\Layouts;

use Illuminate\View\Component;

class Navbar extends Component
{
    public $links;

    /**
     * ['name' => 'NAME', 'link' => '/link']
     */
    public function __construct($links = [])
    {
        $this->links = $links;
    }

    public function render()
    {
        return view('lt-adminlte::components.layouts.navbar');
    }
}
