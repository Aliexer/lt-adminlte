<x-adminlte-sidebar-link icon="fas fa-home" title="Example Link" exact url="/" />

<x-adminlte-sidebar-link title="Parent" url="/first">
    <x-adminlte-sidebar-link title="Child" url="/first/second">
        <x-adminlte-sidebar-link title="Child fo child"  url="/first/second/third" />
    </x-adminlte-sidebar-link>
</x-adminlte-sidebar-link>
