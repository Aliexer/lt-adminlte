<?php

namespace LaravelTemplate\LtAdminlte\Components\Layouts;

use Illuminate\View\Component;

class SidebarLink extends Component
{
    public string $title;
    public string $link;
    /** [['type' => 'success', 'value' => 5]] */
    public array $badges;
    /** fas fa-home */
    public string $icon;
    /** fas fa-home */
    public string $leftIcon;

    public function __construct(
        string $title,
        string $link = '',
        array $badges = [],
        string $icon = "",
        string $leftIcon = ""
    ) {
        $this->title = $title;
        $this->link = $link;
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
}
