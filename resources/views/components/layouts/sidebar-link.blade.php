<!-- has-treeview menu-open -->
<li class="nav-item {{ $slot != '' ? 'has-treeview' : ''}} {{$isActive() ? 'menu-open' : ''}}">
    <!-- active -->
    <a href="{{$slot == '' ? $link() : '#'}}" class="nav-link {{$isActive() ? 'active' : ''}}">
        @if($hasIcon())
        <i class="nav-icon fa-fw {{$icon}}"></i>
        @else
        <i class="nav-icon fa-fw far fa-circle"></i>
        @endif

        <p>
            {{$title}}

            @if($slot != '')
            <i class="right fa-fw fas fa-angle-left"></i>
            @else
            @if($hasRightIcon())
            <i class="right fa-fw {{$rightIcon}}"></i>
            @endif
            @foreach($badges as $badge)
            <span class="right badge badge-{{$badge['type']}}">{{$badge['value']}}</span>
            @endforeach
            @endif
        </p>
    </a>

    @if($slot != '')
    <ul class="nav nav-treeview">
        {{$slot}}
    </ul>
    @endif
</li>