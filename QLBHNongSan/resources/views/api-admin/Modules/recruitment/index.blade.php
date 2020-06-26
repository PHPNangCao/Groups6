@extends('api-admin.master')
@section('title','Danh sách món ngon')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách món ngon <a href="{{route('admin.recruitment.create')}}">Thêm mới</a></h3>
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
                    <th>Tiêu đề </th>
                    <th>Tóm tắt</th>
                    <th>Nội dung</th>
                    <th>Lượt xem</th>
                    <th>Ảnh</th>
                    <th>Trạng thái</th>
                    <td>Sản phẩm</td>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($monngon as $mn)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mn->tieude }}</td>
                    <td>{{ $mn->tomtat }}</td>
                    <td>{{ $mn->noidung }}</td>
                    <td>{{ $mn->luotxem }}</td>
                    <td>{{ $mn->anh }}</td>
                    <td>{{ $mn->trangthai }}</td>
                    <td>{{ $mn->sanpham_id }}</td>
                    <td><a href="{{route('admin.recruitment.edit',['id' => $mn->id])}}">Sửa</a></td>
                    <td><a href="{{route('admin.recruitment.destroy',['id' => $mn->id])}}" onclick="return checkDelete('Bạn có muốn xóa món ngon này không?')">Xóa</a></td>
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