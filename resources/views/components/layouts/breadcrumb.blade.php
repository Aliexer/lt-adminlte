<ol class="breadcrumb float-sm-right">
    @foreach($links as $item)
    <li class="breadcrumb-item"><a href="{{$item['link']}}">{{$item['name']}}</a></li>
    @endforeach
</ol>