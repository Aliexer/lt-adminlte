<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <title>E-CAP</title>
    <x-adminlte-styles></x-adminlte-styles>
</head>

<body class="hold-transition login-page">

    <div class="login-box" id="app">
        <div class="card shadow-lg">
            @if($logo)
                <a href="{{$logoLink ?? '#'}}" class="login-logo mt-3">
                    <img src="{{$logo}}" alt="{{ config('app.name', 'Laravel') }}" class="img-fluid px-5">
                </a>
            @endif
            <div class="card-body login-card-body pt-0 @if($logo) rounded-bottom @else rounded mt-3 @endif">
                {{$slot}}
            </div>
        </div>
    </div>

    <x-adminlte-scripts>
        @if($background)
            @push('scripts')
            <script>
                $('body').css({
                    'background': 'url({{$background}})',
                    'background-size': 'cover'
                });
            </script>
            @endpush
        @endif
    </x-adminlte-scripts>

</body>

</html>
