<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ url('asset/case.png') }}" alt=" Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">CASA IN ACTION</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Andriana</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="http://localhost:8000/" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dasboards
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('news.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            News
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('news.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            States
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('news.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Election
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('news.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Updates
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('news.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Press Room
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('news.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            In The New
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('news.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Donate
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/charts/chartjs.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contoh</p>
                            </a>

                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
