<!-- đây là bảng Khách hàng -->

@extends('api-admin.master')
@section('title','Danh sách Khách hàng')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thông tin khách hàng <a href="{{route('admin.customer.create')}}">Thêm mới</a></h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('admin.customer.index')}}" method="POST">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên khách hàng</th>\
                        <th>Email</th>
                        <th>Số điện thoại </th>
                        <th>Địa chỉ</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($khachhang as $kh)
                    <tr>
                        <td>{{$loop->iteration }}</td>
                        <td>{{ $kh->ten }}</td>
                        <td>{{ $kh->email }}</td>
                        <td>{{ $kh->sdt }}</td>
                        <td>{{ $kh->diachi }}</td>
                    <td><a href="{{route('admin.category.edit',['id' => $kh->id])}}">Edit</a></td>
                        <td><a href="{{route('admin.category.destroy',['id' => $kh->id])}}" onclick="return checkDelete('Bạn có muốn xóa thông tin khách hàng này không?')">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Tên khách hàng</th>\
                        <th>Email</th>
                        <th>Số điện thoại </th>
                        <th>Địa chỉ</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
            </table>
        </form>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->
</div>

@endsection