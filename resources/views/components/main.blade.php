<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <x-adminlte-styles></x-adminlte-styles>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
        <x-adminlte-navbar :links="$navbarLinks"></x-adminlte-navbar>
        <x-adminlte-sidebar :title="$title"></x-adminlte-sidebar>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="{{ $hasBreadcrumb() ? 'col-sm-6' : 'col-sm-12' }}">
                            <h1 class="m-0 text-dark">{{$pageTitle}}</h1>
                        </div>
                        @if($hasBreadcrumb())
                        <div class="col-sm-6">
                            <x-adminlte-breadcrumb :links="$breadcrumb"></x-adminlte-breadcrumb>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    {{ $slot }}
                </div>
            </div>
        </div>
        <x-adminlte-control-sidebar></x-adminlte-control-sidebar>
        <x-adminlte-footer></x-adminlte-footer>
    </div>
    <x-adminlte-scripts></x-adminlte-scripts>
</body>

</html>