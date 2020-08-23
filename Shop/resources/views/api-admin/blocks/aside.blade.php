<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
    <img src="avatar.jpg"
        alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light">Trang Quản Trị</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href=""  style="font-size:20px" class="d-block"></a>
                {{-- <h1 class="text-success" style="font-size:13px">{{auth()->user()->name}}</h1> --}}
                <a href="" style="font-size:13px" class="text-danger">Log Out</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->

                <li class="nav-item">
                <a href="" class="nav-link">
                        <i class="nav-icon far fa-tachometer-alt"></i>
                        <p>
                            Trang tổng quan
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Danh mục sản phẩm
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a href="{{route('admin.category.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Loại sản phẩm</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.product.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sản phẩm</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Danh mục User
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a href="{{route('admin.user.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.typeuser.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Loại User</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                <a href="{{route('admin.news.index')}}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Tin tức
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.supplier.index')}}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Nhà cung cấp
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.slide.index')}}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Slide
                        </p>
                    </a>
                </li>
                
                {{-- <li class="nav-item">
                    <a href="../gallery.html" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Kho hàng
                        </p>
                    </a>
                </li> --}}

                {{-- <li class="nav-header">LABELS</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Important</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Warning</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Informational</p>
                    </a>
                </li> --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>