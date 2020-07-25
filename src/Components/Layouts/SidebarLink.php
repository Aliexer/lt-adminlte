<?php

namespace LaravelTemplate\LtAdminlte\Components\Layouts;

use Illuminate\View\Component;

class SidebarLink extends Component
{
    public string $title;
    public string $url;
    public array $route;
    /** [['type' => 'success', 'value' => 5]] */
    public array $badges;
    /** fas fa-home */
    public string $icon;
    /** fas fa-home */
    public string $leftIcon;

    public function __construct(
        string $title,
        string $url = '',
        array $route = [],
        array $badges = [],
        string $icon = "",
        string $leftIcon = ""
    ) {
        $this->title = $title;
        $this->url = $url;
        $this->route = $route;
        $this->badges = $badges;
        $this->icon = $icon;
        $this->leftIcon = $leftIcon;
    }

    public function render()
    {
        return view('lt-adminlte::components.layouts.sidebar-link');
    }

    public function hasIcon()
    {
        return $this->icon !== '';
    }

    public function hasLeftIcon()
    {
        return $this->leftIcon !== '';
    }

    public function link()
    {
        return $this->route !== [] ? route(...($this->route)) : $this->url;
    }
}
