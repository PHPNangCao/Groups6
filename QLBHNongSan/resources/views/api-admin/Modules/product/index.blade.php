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
                    <th>ID</th>
                    <th>Tên Sản phẩm </th>
                    <th>Mô Tả</th>
                    <th>Hình ảnh</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Loại Sản phẩm</th>
                    <th>Khối Lượng</th> 
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
                    <td><a href="{{route('admin.product.edit',['id' => $SP->id])}}">Edit</a></td>
                    <td><a href="{{route('admin.product.destroy',['id' => $SP->id])}}" onclick="return checkDelete('Bạn có muốn xóa nhóm này không?')">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
            {{-- <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Tên Sản phẩm </th>
                    <th>Mô Tả</th>
                    <th>Hình ảnh</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Loại Sản phẩm</th>
                    <th>Khối Lượng</th> 
                </tr>
            </tfoot> --}}
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->
</div>

@endsection