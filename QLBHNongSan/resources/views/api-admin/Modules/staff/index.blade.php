<!-- đây là bảng nvách hàng -->

@extends('api-admin.master')
@section('title','Danh sách Nhân Viên')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3><a href="{{route('admin.staff.create')}}">Thêm Nhân Viên</a></h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.staff.index')}}" method="POST">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên nhân viên</th>
                        <th>CMND</th>
                        <th>Số điện thoại </th>
                        <th>Địa chỉ</th>
                        <th>Mã Số Nhân Viên</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nhanvien as $nv)
                    <tr>
                        <td>{{$loop->iteration }}</td>
                        <td>{{ $nv->ten }}</td>
                        <td>{{ $nv->email }}</td>
                        <td>{{ $nv->sdt }}</td>
                        <td>{{ $nv->diachi }}</td>
                        <td>{{ $nv->user_id }}</td>
                    <td><a href="{{route('admin.staff.edit',['id' => $nv->id])}}">Sửa</a></td>
                        <td><a href="{{route('admin.staff.destroy',['id' => $nv->id])}}" onclick="return checkDelete('Bạn có muốn xóa thông tin nvách hàng này nvông?')">Xoá</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </form>
    </div>
    <!-- /.card-body -->
    <!-- /.card-footer-->
</div>

@endsection