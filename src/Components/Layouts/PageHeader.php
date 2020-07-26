<?php

namespace LaravelTemplate\LtAdminlte\Components\Layouts;

use Illuminate\View\Component;

class PageHeader extends Component
{
    public string $title;

    public array $breadcrumb;

    public function __construct(
        string $title = "Page",
        array $breadcrumb = []
    ) {
        $this->title = $title;
        $this->breadcrumb = $breadcrumb;
    }

    public function render()
    {
        return view('lt-adminlte::components.layouts.page-header');
    }


    public function hasBreadcrumb()
    {
        return $this->breadcrumb !== [];
    }
}
