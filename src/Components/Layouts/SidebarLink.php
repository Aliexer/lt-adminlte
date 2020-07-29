<?php

namespace LaravelTemplate\LtAdminlte\Components\Layouts;

use Illuminate\View\Component;
use Illuminate\Support\Str;


class SidebarLink extends Component
{
    public string $title;
    public string $url;
    public bool $exact;
    public array $route;
    /** [['type' => 'success', 'value' => 5]] */
    public array $badges;
    /** fas fa-home */
    public string $icon;
    /** fas fa-home */
    public string $rightIcon;

    public function __construct(
        string $title,
        string $url = '',
        array $route = [],
        array $badges = [],
        bool $exact = false,
        string $icon = "",
        string $rightIcon = ""
    ) {
        $this->title = $title;
        $this->url = $url;
        $this->route = $route;
        $this->badges = $badges;
        $this->exact = $exact;
        $this->icon = $icon;
        $this->rightIcon = $rightIcon;
    }

    public function render()
    {
        return view('lt-adminlte::components.layouts.sidebar-link');
    }

    public function hasIcon()
    {
        return $this->icon !== '';
    }

    public function hasRightIcon()
    {
        return $this->rightIcon !== '';
    }

    public function link()
    {
        return $this->hasRoute() ? route(...($this->route)) : $this->url;
    }

    public function hasRoute()
    {
        return $this->route !== [];
    }

    public function isExact()
    {
        return $this->exact === true;
    }

    /**
     * In order to set parent links active the child route name must
     * star with parent route name followed by dot
     * eg:
     * Parent route: product
     * Child route: product.create
     */
    public function isActive()
    {
        $currentLink = $this->hasRoute() ? request()->route()->getName() : request()->url();

        $thisLink = $this->hasRoute() ? $this->route[0] : url($this->url);

        return $this->isExact() ? $currentLink === $thisLink : Str::startsWith($currentLink, $thisLink);
    }
}
