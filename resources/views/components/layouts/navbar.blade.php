<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        @foreach($links as $item)
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{$item['link']}}" class="nav-link">{{$item['name']}}</a>
        </li>
        @endforeach
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        @if(false)
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="https://laravel.com/img/logomark.min.svg" alt="User Avatar"
                            class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Brad Diesel
                                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Call me whenever you can...</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="https://laravel.com/img/logomark.min.svg" alt="User Avatar"
                            class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                John Pierce
                                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">I got your message bro</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="https://laravel.com/img/logomark.min.svg" alt="User Avatar"
                            class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Nora Silvester
                                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">The subject goes here</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
        </li>
        @endif

        @if(false)
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fa-fw fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fa-fw fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fa-fw fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        @endif

        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <span class="d-inline fas fa-user"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="width: 150px">
                <li class="user-body border-0 text-center">

                    <!-- To Be Removed -->
                    <p class="text-sm text-left">content of this section can be edited from <strong
                            class="text-info">navbar</strong> file
                        under :</p>
                    <ul class="text-sm text-left">
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
                                class="fa-fw fas fa-file-code"></i> <b>navbar.blade.php</b></li>
                    </ul>
                    <!-- /To Be Removed -->
                    
                </li>
                <li class="user-footer">
                    <a href="/todo" class="btn btn-default btn-flat" style="width: 45%">Profile</a>
                    <a class="btn btn-default btn-flat float-right" href="#" style="width: 45%" data-toggle="tooltip"
                        data-placement="bottom" title="Logout"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-fw fa-power-off"></i>
                    </a>
                    <form id="logout-form" action="logout" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>

        @if(config('lt-adminlte.control-sidebar'))
        <!-- Control Sidebar action button -->
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
                    class="fas fa-cog"></i></a>
        </li>
        @endif
    </ul>
</nav>
<!-- /.navbar -->