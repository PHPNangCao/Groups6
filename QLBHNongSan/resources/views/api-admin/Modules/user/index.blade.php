@extends('api-admin.master')
@section('title','Danh sách người dùng')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách người dùng <a href="{{route('admin.user.create')}}">Thêm mới</a></h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email </th>
                    <th>Password</th>
                    <th>Loại người dùng</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nguoidung as $nd)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $nd->email }}</td>
                    <td>{{ $nd->pass }}</td>
                    <td>{{ $nd->loainguodung }}</td>
                <td><a href="{{route('admin.user.edit',['id' => $nd->id])}}">Sửa</a></td>
                    <td><a href="{{route('admin.user.destroy',['id' => $nd->id])}}" onclick="return checkDelete('Bạn có muốn xóa người dùng này không?')">Xóa</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>    
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->

</div>
@endsection