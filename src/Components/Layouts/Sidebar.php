<?php

namespace LaravelTemplate\LtAdminlte\Components\Layouts;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public $title;

    public $logo;
    
    public $indexUrl;

    public function __construct(string $title, string $indexUrl = null, string $logo = null)
    {
        $this->title = $title;
        $this->logo = $logo;
        $this->indexUrl = $indexUrl;
    }

    public function render()
    {
        return view('lt-adminlte::components.layouts.sidebar');
    }
}
