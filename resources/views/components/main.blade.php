<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <x-adminlte-styles></x-adminlte-styles>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
        <x-adminlte-navbar :links="$navbarLinks"></x-adminlte-navbar>
        <x-adminlte-sidebar></x-adminlte-sidebar>
        <div class="content-wrapper">
            <x-adminlte-page-header :title="$title" :breadcrumb="$breadcrumb"></x-adminlte-page-header>
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    {{ $slot }}
                </div>
            </div>
        </div>
        @if(config('lt-adminlte.control-sidebar'))
        <x-adminlte-control-sidebar></x-adminlte-control-sidebar>
        @endif
        <x-adminlte-footer></x-adminlte-footer>
    </div>
    <x-adminlte-scripts></x-adminlte-scripts>
</body>

</html>