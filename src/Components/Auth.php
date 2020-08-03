<?php

namespace LaravelTemplate\LtAdminlte\Components;

use Illuminate\View\Component;

class Auth extends Component
{
    public $logo;

    public $background;

    public $logoLink;

    public function __construct(
        string $logoLink = null,
        string $logo = null,
        string $background = null
    ) {
        $this->logo = $logo;
        $this->background = $background;
        $this->logoLink = $logoLink;
    }

    public function render()
    {
        return view('lt-adminlte::components.auth');
    }
}
