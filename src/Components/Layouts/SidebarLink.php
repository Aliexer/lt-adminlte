<?php

namespace LaravelTemplate\LtAdminlte\Components\Layouts;

use Illuminate\View\Component;
use Illuminate\Support\Str;


class SidebarLink extends Component
{
    public string $title;
    public string $url;
    public bool $exact;
    public $route;
    public string $parentRoute;
    public string $parentUrl;
    /** [['type' => 'success', 'value' => 5]] */
    public array $badges;
    /** fas fa-home */
    public string $icon;
    /** fas fa-home */
    public string $rightIcon;

    public function __construct(
        string $title,
        string $url = '',
        $route = '',
        string $parentRoute = '',
        string $parentUrl = '',
        array $badges = [],
        bool $exact = false,
        string $icon = '',
        string $rightIcon = ''
    ) {
        $this->title = $title;
        $this->url = $url;
        $this->route = $route;
        $this->parentRoute = $parentRoute;
        $this->parentUrl = $parentUrl;
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
        return $this->hasRoute() ? route(...$this->getRoute()) : $this->url;
    }

    public function hasRoute()
    {
        return $this->route !== '';
    }

    public function hasParentRoute()
    {
        return $this->parentRoute !== '';
    }

    public function hasParentUrl()
    {
        return $this->parentUrl !== '';
    }

    public function isParent()
    {
        return $this->hasParentRoute() || $this->hasParentUrl();
    }

    public function getRoute()
    {
        return is_array($this->route) ? $this->route : [$this->route];
    }

    public function getRouteName()
    {
        return is_array($this->route) ? $this->route[0] : $this->route;
    }

    public function getRouteParameters()
    {
        return is_array($this->route) ? $this->route[1] : null;
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
        if ($this->isParent()) {
            $currentLink = $this->hasParentRoute() ? request()->route()->getName() : request()->url();

            $thisLink = $this->hasParentRoute() ? $this->parentRoute : url($this->parentUrl);
        } else {
            $currentLink = $this->hasRoute() ? request()->route()->getName() : request()->url();

            $thisLink = $this->hasRoute() ? $this->getRouteName() : url($this->url);
        }

        return $this->isExact() ? $currentLink === $thisLink : Str::startsWith($currentLink, $thisLink);
    }
}
