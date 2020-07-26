<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        @if(config('lt-adminlte.logoUrl'))
        <img src="{{config('lt-adminlte.logoUrl')}}" alt="{{config('app.name')}}" class="brand-image img-circle elevation-3" style="opacity: .8">
        @endif
        <span class="ml-1 brand-text font-weight-light">{{config('app.name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add navigation links here-->

               <x-adminlte-sidebar-link title="one" icon="fas fa-home" :route="['first']" />

                <x-adminlte-sidebar-link title="one" :route="['first']">
                    <x-adminlte-sidebar-link title="two" :route="['first.second']" />
                    <x-adminlte-sidebar-link title="two1" :route="['first.second']">
                        <x-adminlte-sidebar-link title="three" :route="['first.second.third']" />
                    </x-adminlte-sidebar-link>
                </x-adminlte-sidebar-link>

                <x-adminlte-sidebar-link title="test1" icon="fas fa-home" :route="['any', ['any'=>'test1']]" />

                <x-adminlte-sidebar-link title="test2" :route="['any', ['any'=>'test2']]">
                    <x-adminlte-sidebar-link title="test21" :route="['any', ['any'=>'test2', 'any1' => 'test1']]" />
                    <x-adminlte-sidebar-link title="test22" :route="['any', ['any'=>'test2', 'any1' => 'test2']]" />
                </x-adminlte-sidebar-link>

                <x-adminlte-sidebar-link title="test3" :route="['any', ['any'=>'test3']]">
                    <x-adminlte-sidebar-link title="test31" :route="['any', ['any'=>'test3', 'any1' => 'test1']]" />
                    <x-adminlte-sidebar-link title="test32" :route="['any', ['any'=>'test3', 'any1' => 'test2']]">
                        <x-adminlte-sidebar-link title="test321"
                            :route="['any', ['any'=>'test3', 'any1' => 'test2', 'any2' => 'test1']]" />
                    </x-adminlte-sidebar-link>
                </x-adminlte-sidebar-link>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>