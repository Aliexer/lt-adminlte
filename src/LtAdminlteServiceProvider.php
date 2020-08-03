<?php

namespace LaravelTemplate\LtAdminlte;

use Illuminate\Support\ServiceProvider;
use LaravelTemplate\LtAdminlte\Components\Auth;
use LaravelTemplate\LtAdminlte\Components\Layouts\Breadcrumb;
use LaravelTemplate\LtAdminlte\Components\Layouts\ControlSidebar;
use LaravelTemplate\LtAdminlte\Components\Layouts\Footer;
use LaravelTemplate\LtAdminlte\Components\Layouts\MenuItem;
use LaravelTemplate\LtAdminlte\Components\Layouts\Navbar;
use LaravelTemplate\LtAdminlte\Components\Layouts\PageHeader;
use LaravelTemplate\LtAdminlte\Components\Layouts\Scripts;
use LaravelTemplate\LtAdminlte\Components\Layouts\Sidebar;
use LaravelTemplate\LtAdminlte\Components\Layouts\SidebarLink;
use LaravelTemplate\LtAdminlte\Components\Layouts\SidebarMenu;
use LaravelTemplate\LtAdminlte\Components\Layouts\Styles;
use LaravelTemplate\LtAdminlte\Components\Main;

class LtAdminlteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'lt-adminlte');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'lt-adminlte');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        $this->loadViewComponentsAs('adminlte', [
            Sidebar::class,
            SidebarLink::class,
            SidebarMenu::class,
            ControlSidebar::class,
            Navbar::class,
            Styles::class,
            Scripts::class,
            Footer::class,
            MenuItem::class,
            Breadcrumb::class,
            PageHeader::class,
            //Views
            Main::class,
            Auth::class
        ]);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('lt-adminlte.php'),
            ], 'lt-adminlte:config');

            // Publishing the views.
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/lt-adminlte'),
            ], 'lt-adminlte:views');

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/lt-adminlte'),
            ], 'lt-adminlte:assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/lt-adminlte'),
            ], 'lt-adminlte:lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'lt-adminlte');

        // Register the main class to use with the facade
        $this->app->singleton('lt-adminlte', function () {
            return new LtAdminlte;
        });
    }
}
