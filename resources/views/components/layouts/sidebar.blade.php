<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{$indexUrl}}" class="brand-link">
        @if($logo)
        <img src="{{asset($logo)}}" alt="{{$title}}" class="brand-image img-circle elevation-3" style="opacity: .8">
        @endif
        <span class="ml-1 brand-text font-weight-light">{{$title}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <x-adminlte-sidebar-link title="test1" icon="fas fa-home" :route="['any', ['any'=>'test1']]" />

                <x-adminlte-sidebar-link title="test2" :route="['any', ['any'=>'test2']]">
                    <x-adminlte-sidebar-link title="test21" :route="['any', ['any'=>'test2', 'any1' => 'test1']]">
                    </x-adminlte-sidebar-link>
                    <x-adminlte-sidebar-link title="test22" :route="['any', ['any'=>'test2', 'any1' => 'test2']]">
                    </x-adminlte-sidebar-link>
                </x-adminlte-sidebar-link>

                <x-adminlte-sidebar-link title="test3" :route="['any', ['any'=>'test3']]">
                    <x-adminlte-sidebar-link title="test31" :route="['any', ['any'=>'test3', 'any1' => 'test1']]">
                    </x-adminlte-sidebar-link>
                    <x-adminlte-sidebar-link title="test32" :route="['any', ['any'=>'test3', 'any1' => 'test2']]">
                        <x-adminlte-sidebar-link title="test321" :route="['any', ['any'=>'test3', 'any1' => 'test2', 'any2' => 'test1']]">
                        </x-adminlte-sidebar-link>
                    </x-adminlte-sidebar-link>
                </x-adminlte-sidebar-link>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>