@extends('api-admin.master')
@section('title','Danh sách loại sản phẩm')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
        <a href="{{route('admin.user.create')}}" class="btn btn-info">Thêm User</a>
        </h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead style="text-align: center">
                <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>SĐT</th>
                    <th>Địa chỉ</th>
                    <th>Vai Trò</th>
                    <th>Trạng thái</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody style="text-align: center">
                @foreach ($user as $user)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->role_id}}</td>
                    <td>
                        @if ($user->status == 1)
                            <a href="{{route('admin.user.status',['id' => $user->id])}}" class="btn btn-app">Show</i></a>
                        @else
                            <a href="{{route('admin.user.status',['id' => $user->id])}}" class="btn btn-app">Hide</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('admin.user.edit',['id' => $user->id])}}" class="btn btn-success">Sửa <i class="fa fa-pencil"></a>
                        <a href="{{route('admin.user.destroy',['id' => $user->id])}}" onclick="return checkDelete('Bạn có muốn xóa user này không?')" class="btn btn-danger">Xóa <i class="fa fa-close"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
