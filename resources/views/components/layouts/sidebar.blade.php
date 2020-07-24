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
                <x-adminlte-sidebar-link title="test1" icon="fas fa-home"></x-adminlte-sidebar-link>
                <x-adminlte-sidebar-link title="test2">
                    <x-adminlte-sidebar-link title="test21"></x-adminlte-sidebar-link>
                </x-adminlte-sidebar-link>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>