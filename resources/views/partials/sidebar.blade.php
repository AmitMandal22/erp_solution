<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">ERP Solution</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                @if (auth()->guard('employee')->check())
                    <a href="#" class="d-block">{{ auth()->guard('employee')->user()->first_name }}
                        {{ auth()->guard('employee')->user()->last_name }}
                    </a>
                @else
                    <a href="#" class="d-block">{{ auth()->user()->first_name }}
                        {{ auth()->user()->last_name }}
                    </a>
                @endif

            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class=" mt-2 mb-2 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link active">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item menu-open">
                    <form id="companies-form" action="{{ route('all.companies') }}" method="POST">
                        @csrf
                        <a href="#" class="nav-link active"
                            onclick="event.preventDefault(); document.getElementById('companies-form').submit();">
                            <i class="nav-icon far fa-building"></i>
                            <p>
                                Companies
                            </p>
                        </a>
                    </form>
                    {{-- <i class="right fas fa-angle-left"></i> --}}

                    <ul class="nav">
                        <li class="nav-item">
                            <a href="{{ route('add.company') }}" class="nav-link">
                                <i class="fas fa-registered nav-icon"></i>
                                <p>Add Company</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-edit nav-icon"></i>
                                <p>Edit Company</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <form id="employees-form" action="{{ route('all.employees') }}" method="POST">
                        @csrf
                        <a href="#" class="nav-link active"
                            onclick="event.preventDefault(); document.getElementById('employees-form').submit();">
                            <i class="nav-icon far fa-user"></i>
                            <p>
                                Empolyess
                            </p>
                        </a>
                    </form>
                    {{-- <i class="right fas fa-angle-left"></i> --}}

                    <ul class="nav">
                        <li class="nav-item">
                            <a href="{{ route('add.employee') }}" class="nav-link">
                                <i class="fas fa-registered nav-icon"></i>
                                <p>Add Employee</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-edit nav-icon"></i>
                                <p>Edit Employee</p>
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
