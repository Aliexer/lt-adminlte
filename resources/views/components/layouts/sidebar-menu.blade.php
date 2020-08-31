<x-lte-sidebar-link icon="fas fa-home" title="Example Link" exact url="/" />

<x-lte-sidebar-link title="Parent" url="/first">
    <x-lte-sidebar-link title="Child" url="/first/second">
        <x-lte-sidebar-link title="Child fo child"  url="/first/second/third" />
    </x-lte-sidebar-link>
</x-lte-sidebar-link>
