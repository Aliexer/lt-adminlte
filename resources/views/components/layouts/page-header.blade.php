<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="{{ $hasBreadcrumb() ? 'col-sm-6' : 'col-sm-12' }}">
                <h1 class="m-0 text-dark">{{$title}}</h1>
            </div>
            @if($hasBreadcrumb())
            <div class="col-sm-6">
                <x-adminlte-breadcrumb :links="$breadcrumb"></x-adminlte-breadcrumb>
            </div>
            @endif
        </div>
    </div>
</div>