@extends('api-admin.master')
@section('title','Danh sách Loại Người Dùng')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thông tin Loại Người Dùng <a href="{{route('admin.kindofuser.create')}}">Thêm mới</a></h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.kindofuser.index')}}" method="POST">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên Loại Người Dùng</th>
                        <th>Mô tả</th>
                        <th>Sửa</th>
                        <th>Xoá</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($loainguoidung as $loaind)
                    <tr>
                        <td>{{$loop->iteration }}</td>
                        <td>{{ $loaind->ten }}</td>
                        <td>{{ $loaind->mota }}</td>
                    <td><a href="{{route('admin.kindofuser.edit',['id' => $loaind->id])}}">Sửa</a></td>
                        <td><a href="{{route('admin.kindofuser.destroy',['id' => $loaind->id])}}" onclick="return checkDelete('Bạn có muốn xóa thông tin khách hàng này không?')">Xoá</a></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </form>
    </div>
</div>

@endsection