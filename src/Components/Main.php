<?php

namespace LaravelTemplate\LtAdminlte\Components;

use Illuminate\View\Component;

class Main extends Component
{
    public string $title;

    public $logo;

    public $indexUrl;

    public array $navbarLinks;

    public array $breadcrumb;

    public function __construct(
        string $title = "Page",
        array $navbarLinks = [],
        array $breadcrumb = [],
        string $indexUrl = null,
        string $logo = null
    ) {
        $this->title = $title;
        $this->logo = $logo;
        $this->indexUrl = $indexUrl;
        $this->navbarLinks = $navbarLinks;
        $this->breadcrumb = $breadcrumb;
    }

    public function render()
    {
        return view('lt-adminlte::components.main');
    }
}
