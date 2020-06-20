@extends('api-admin.master')
@section('title','Danh sách tin tức')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách tin tức <a href="{{route('admin.category.create')}}">Thêm mới</a></h3>
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
                    <th>Tên</th>
                    <th>Mô tả</th>
                    <th>Ảnh</th>
                    <th>Trạng thái</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($LoaiSanPham as $LoaiSP)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $LoaiSP->ten }}</td>
                    <td>{{ $LoaiSP->mota }}</td>
                    <td>{{ $LoaiSP->anh }}</td>
                    <td>{{ $LoaiSP->trangthai }}</td>
                    <td><a href="{{route('admin.category.edit',['id' => $LoaiSP->id])}}">Sửa</a></td>
                    <td><a href="{{route('admin.category.destroy',['id' => $LoaiSP->id])}}" onclick="return checkDelete('Bạn có muốn xóa loại sản phẩm này không?')">Xóa</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Images</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->
</div>
@endsection