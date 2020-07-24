<?php

namespace LaravelTemplate\LtAdminlte\Components;

use Illuminate\View\Component;

class Main extends Component
{
    public string $title;

    public $logo;

    public $indexUrl;

    public string $pageTitle;

    public function __construct(string $title, string $pageTitle, string $indexUrl = null, string $logo = null)
    {
        $this->title = $title;
        $this->pageTitle = $pageTitle;
        $this->logo = $logo;
        $this->indexUrl = $indexUrl;
    }

    public function render()
    {
        return view('lt-adminlte::components.main');
    }
}
