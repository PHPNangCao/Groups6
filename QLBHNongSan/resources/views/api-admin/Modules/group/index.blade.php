@extends('api-admin.master')
@section('title','Danh sách nhóm sản phẩm')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách nhóm Sản Phẩm <a href="{{route('admin.group.create')}}">Thêm mới</a></h3>
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
                    <th>Name</th>
                    <th>Description</th>
                    <th>Images</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($NhomSanPham as $NhomSP)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{ $NhomSP->ten }}</td>
                    <td>{{ $NhomSP->mota }}</td>
                    <td>{{ $NhomSP->anh }}</td>
                <td><a href="{{route('admin.group.edit',['id' => $NhomSP->id])}}">Edit</a></td>
                    <td><a href="{{route('admin.group.destroy',['id' => $NhomSP->id])}}" onclick="return checkDelete('Bạn có muốn xóa nhóm này không?')">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Images</th>
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