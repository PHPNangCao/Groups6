@extends('api-admin.master')
@section('title','Danh sách Role và User')
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
                    <th>User</th>
                    <th>role</th>
                </tr>
            </thead>
            <tbody style="text-align: center">
                @foreach ($role_user as $ro)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{ $ro->user_id->name }}</td>
                    <td>{{ $ro->role_id->name }}</td>
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
