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
            <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add navigation links here-->
                <x-lte-sidebar-menu></x-lte-sidebar-menu>
            </ul>

            <!-- To Be Removed -->
            <div class="mt-5 px-3 border-top logo-xl">
                <p class="text-white">sidebar content can be edited from <strong class="text-info">sidebar</strong> file
                    under :
                </p>
                <ul class="text-sm text-white pl-3">
                    <li> <i class="fas fa-folder fa-fw"></i> <span>resources</span></li>
                    <li> <i class="fas fa-level-up-alt fa-rotate-90 fa-fw"></i><i class="fa-fw fas fa-folder"></i>
                        <span>views</span></li>
                    <li> <i class="fas fa-level-up-alt fa-rotate-90 fa-fw"></i><i class="fa-fw fas fa-folder"></i>
                        <span>vendor</span></li>
                    <li> <i class="fas fa-level-up-alt fa-rotate-90 fa-fw"></i><i class="fa-fw fas fa-folder"></i>
                        <span>lt-adminlte</span></li>
                    <li> <i class="fas fa-level-up-alt fa-rotate-90 fa-fw"></i><i class="fa-fw fas fa-folder"></i>
                        <span>components</span></li>
                    <li> <i class="fas fa-level-up-alt fa-rotate-90 fa-fw"></i><i class="fa-fw fas fa-folder"></i>
                        <span>layouts</span></li>
                    <li class="text-success"> <i class="fas fa-level-up-alt fa-rotate-90 fa-fw"></i><i
                            class="fa-fw fas fa-file-code"></i> <b>sidbar.blade.php</b></li>
                </ul>
            </div>
            <!-- /To Be Removed -->



        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>