# LT-AdminLTE

[![Latest Version on Packagist](https://img.shields.io/packagist/v/laravel-template/lt-adminlte.svg?style=flat-square)](https://packagist.org/packages/laravel-template/lt-adminlte)
[![Build Status](https://img.shields.io/travis/laravel-template/lt-adminlte/master.svg?style=flat-square)](https://travis-ci.org/laravel-template/lt-adminlte)
[![Quality Score](https://img.shields.io/scrutinizer/g/laravel-template/lt-adminlte.svg?style=flat-square)](https://scrutinizer-ci.com/g/laravel-template/lt-adminlte)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel-template/lt-adminlte.svg?style=flat-square)](https://packagist.org/packages/laravel-template/lt-adminlte)

Welcome to the lt-adminlte!

This package provide an easy way to implement AdminLTE template on your Laravel Application.

More templates integrations will be added later in  [laravel-template](https://github.com/laravel-template).


## Installation

You can install the package via composer:

```bash
composer require laravel-template/lt-adminlte
```

Config file can be published using the command bellow
``` php
php artisan vendor:publish --tag lt-adminlte:config
```

In order to customize **views**, publish the first using, 
``` php
php artisan vendor:publish --tag lt-adminlte:views
```

The same for **lang** files, 
``` php
php artisan vendor:publish --tag lt-adminlte:views
```

## Usage

### Basic
This package use [Blade Component](https://laravel.com/docs/7.x/blade#components) to simplify the implementation of the feature in your application.

Just add the tag below depending on your desired layouts **_main_**:
``` php
<x-adminlte-main title="Your App Name" pageTitle="the active page title">Page Content</x-adminlte-main>
```
and more attribute may be added like:
* **logo**: your logo link

* **indexUrl**: your home page link triggered when clicking on your logo

* **navbarLinks**: displays list of menus on the top left of the navbar the links must be in this format
```php
[
    [
        'name' => 'Home',
        'link' => '/home'
    ],
    ...
]
```

* **breadcrumb**: breadcrumb also has the same format
```php
[
    [
        'name' => 'Home',
        'link' => '/home'
    ],
    ...
]
```
### Sidebar Navigation

To update the sidebar menu, make you sure you already published the views, then go to _**resources/views/vendor/lt-adminlte/components/layouts/sidebar.blade.php**_

then add navigation links under `<!-- Add navigation links here-->` comment
```php
<x-adminlte-sidebar-link title="Title" :route="['routeName']"/>

<x-adminlte-sidebar-link title="Parent" :route="['parentRoute']">
    <x-adminlte-sidebar-link title="Child" :route="['parentRoute.childRoute']" />
</x-adminlte-sidebar-link>
```
Other attributes are disponible:
* **badges**: displayed on the left of menu to that contain a value and a type like 
```php
[
    [
        'type' => 'success', //types are: success, info, primary, warning, secondary, danger
        'value' => '10'
    ],
    ...
]
```
* **icon**: use [FontAwesome v5.13](https://fontawesome.com) library, displayed in the left of the menu **if the menu is not parent**, default value is ```far fa-circle```

* **rightIcon**: same a the normal icon the difference is this one is displayed on the right of the menu before the badges and **if the menu is not parent**

* **url**: for external links to use it make sure that **the route attribute is not provided**


### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email aminetiyal@gmail.com instead of using the issue tracker.

## Credits

- [Amine TIYAL](https://github.com/laravel-template)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).