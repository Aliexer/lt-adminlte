<div class="card @if($type) card-{{$type}} @endif">
    @if($title)
    <div class="card-header">
        <h3 class="card-title">{{$title}}</h3>
    </div>
    @endif
    <div class="card-body">
        {{$slot}}
    </div>
</div>