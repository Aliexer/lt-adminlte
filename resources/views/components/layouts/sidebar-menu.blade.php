<x-adminlte-sidebar-link title="one" :route="['first']">
    <x-adminlte-sidebar-link title="two" :route="['first.second']">
        <x-adminlte-sidebar-link title="three" :route="['first.second.third']" />
    </x-adminlte-sidebar-link>
</x-adminlte-sidebar-link>

<x-adminlte-sidebar-link title="test1" icon="fas fa-home" :route="['any', ['any'=>'test1']]" />