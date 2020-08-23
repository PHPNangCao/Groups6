<!DOCTYPE html>
<html>
<head>
    @include('api-admin.blocks.head')
</head>
<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('api-admin.blocks.navbar')
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        @include('api-admin.blocks.aside')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @include('api-admin.blocks.header')
            <!-- Main content -->
            <section class="content">
                @yield('content')
                <!-- /.card -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @include('api-admin.blocks.footer')
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('api-admin.blocks.foot')
</body>
</html>