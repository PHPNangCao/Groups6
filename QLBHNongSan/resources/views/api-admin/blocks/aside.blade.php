<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="api-admin/index3.html" class="brand-link">
    <img src="api-admin/dist/img/AdminLTELogo.png"
        alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light">Trang Quản Trị</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="api-admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Nhóm 6</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                    
                <li class="nav-item">
                    <a href="../gallery.html" class="nav-link">
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
                        <li class="nav-item">
                            <a href="{{route('admin.group.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Nhóm sản phẩm</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.unit.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Đơn vị tính</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Danh mục người dùng
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.user.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Người Dùng
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a href="{{route('admin.staff.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Thông Tin Nhân Viên
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.kindofuser.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Loại Người Dùng
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

                
                <li class="nav-item">
                    <a href="{{route('admin.supplier.index')}}" class="nav-link">
                        <i class="nav-icon far fa-home"></i>
                        <p>
                            Nhà cung cấp
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.customer.index')}}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Khách hàng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../gallery.html" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Đơn đặt hàng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                <a href="{{route('admin.lot-order.index')}}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Lô đặt hàng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../gallery.html" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Bình Luận khách hàng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.recruitment.index')}}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Món Ngon
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.promotional.index')}}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Quảng Cáo
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.recruitment.index')}}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Tuyển dụng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.sale.index')}}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Khuyến mãi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../gallery.html" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Kho hàng
                        </p>
                    </a>
                </li>

                <li class="nav-header">LABELS</li>
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
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>