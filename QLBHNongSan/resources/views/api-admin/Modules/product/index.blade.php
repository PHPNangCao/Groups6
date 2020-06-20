@extends('api-admin.master')
@section('title','Danh sách sản phẩm')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách Sản Phẩm <a href="{{route('admin.product.create')}}">Thêm Sản phẩm </a></h3>
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
                    <th>Mã</th>
                    <th>Tên Sản phẩm </th>
                    <th>Mô Tả</th>
                    <th>Hình ảnh</th>
                    <th>Loại Sản phẩm</th>
                    <th>Khối Lượng</th> 
                    <th>Trạng Thái</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($SanPham as $SP)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{ $SP->ten }}</td>
                    <td>{{ $SP->mota }}</td>
                    <td>{{ $SP->anh }}</td>
                    <td>{{ $SP->loaisanpham_id }}</td>
                    <td>{{ $SP->donvitinh_id }}</td>
                    <td>{{ $SP->trangthai }}</td>
                <td><a href="{{route('admin.product.edit',['id' => $SP->id])}}">Sửa</a></td>
                    <td><a href="{{route('admin.product.destroy',['id' => $SP->id])}}" onclick="return checkDelete('Bạn có muốn xóa nhóm này không?')">Xoá</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        
    </div>
    <!-- /.card-footer-->
</div>

@endsection