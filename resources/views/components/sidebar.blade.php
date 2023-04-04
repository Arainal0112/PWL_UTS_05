<div>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src="dist/img/Polinema.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">UTS PWL</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Admin</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="{{Route('home')}}" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{Route('bayi.index')}}" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Data Bayi
                            </p>
                        </a>
                    </li>
{{--                     
                    <li class="nav-item">
                        <a href="{{Route('pengalamanKuliah')}}" class="nav-link {{$pengalaman}}">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Pengalaman Kuliah
                            </p>
                        </a>
                    </li> --}}
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
</div>