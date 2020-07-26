<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        @if(config('lt-adminlte.logoUrl'))
        <img src="{{config('lt-adminlte.logoUrl')}}" alt="{{config('app.name')}}" class="brand-image">
        @endif
        <span class="ml-1 brand-text font-weight-light">{{config('app.name')}}</span>
    </a>

    
    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add navigation links here-->

                <x-adminlte-sidebar-link title="one" :route="['first']">
                    <x-adminlte-sidebar-link title="two" :route="['first.second']">
                        <x-adminlte-sidebar-link title="three" :route="['first.second.third']" />
                    </x-adminlte-sidebar-link>
                </x-adminlte-sidebar-link>

                <x-adminlte-sidebar-link title="test1" icon="fas fa-home" :route="['any', ['any'=>'test1']]" />

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>