<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <x-lte-styles></x-lte-styles>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
        <x-lte-navbar :links="$navbarLinks"></x-lte-navbar>
        <x-lte-sidebar></x-lte-sidebar>
        <div class="content-wrapper">
            <x-lte-page-header :title="$title" :breadcrumb="$breadcrumb"></x-lte-page-header>
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    {{ $slot }}
                </div>
            </div>
        </div>
        @if(config('lt-adminlte.control-sidebar'))
        <x-lte-control-sidebar></x-lte-control-sidebar>
        @endif
        <x-lte-footer></x-lte-footer>
    </div>
    <x-lte-scripts></x-lte-scripts>
</body>

</html>