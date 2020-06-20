@extends('api-admin.master')
@section('title','Đơn Vị Tính')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách Đơn Vị Tính <a href="{{route('admin.unit.create')}}">Thêm Mới</a></h3>
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
                    <th>Tên</th>
                    <th>Mô tả</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($DonViTinh as $DVT)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{ $DVT->ten }}</td>
                    <td>{{ $DVT->mota }}</td>
                    <td><a href="{{route('admin.unit.edit',['id' => $DVT->id])}}">Sửa</a></td>
                    <td><a href="{{route('admin.unit.destroy',['id' => $DVT->id])}}" onclick="return checkDelete('Bạn có muốn xóa loại sản phẩm này không?')">Xóa</a></td>
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