@extends('api-admin.master')
@section('title','Danh sách Phân Quyền')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
        <a href="{{route('admin.permission.create')}}" class="btn btn-info">Thêm Phân Quyền</a>
        </h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead style="text-align: center">
                <tr>
                    <th>STT</th>
                    <th>Quyền</th>
                    <th>Hiển Thị</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody style="text-align: center">
                @foreach ($permission as $per)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{ $per->name }}</td>
                    <td>{{ $per->display_name }}</td>
                    <td>{{ $per->group_permission_id}}</td>
                    <td>
                        <a href="{{route('admin.permission.edit',['id' => $per->id])}}" class="btn btn-success">Sửa <i class="fa fa-pencil"></a>
                        <a href="{{route('admin.permission.destroy',['id' => $per->id])}}" onclick="return checkDelete('Bạn có muốn xóa phân quyền này không?')" class="btn btn-danger">Xóa <i class="fa fa-close"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
