@extends('api-admin.master')
@section('title','Danh sách Role')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
        <a href="{{route('admin.role.create')}}" class="btn btn-info">Thêm Role</a>
        </h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead style="text-align: center">
                <tr>
                    <th>STT</th>
                    <th>Vai Trò</th>
                    <th>Hiển Thị</th>
                    <th>Mô tả</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody style="text-align: center">
                @foreach ($role as $role)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{ $role->name }}</td>
                    <td>{{ $role->display_name }}</td>
                    <td>{{$role->description}}</td>
                    <td>
                        <a href="{{route('admin.role.edit',['id' => $role->id])}}" class="btn btn-success">Sửa <i class="fa fa-pencil"></a>
                        <a href="{{route('admin.role.destroy',['id' => $role->id])}}" onclick="return checkDelete('Bạn có muốn xóa role này không?')" class="btn btn-danger">Xóa <i class="fa fa-close"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
