@extends('api-admin.master')
@section('title','Danh sách loại User')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
        <a href="{{route('admin.typeuser.create')}}" class="btn btn-info">Thêm type-user</a>
        </h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead style="text-align: center">
                <tr>
                    <th>STT</th>
                    <th>User</th>
                    <th>Loại User</th>
                    <th>Thao Tác</th>
                </tr>
            </thead> 
            <tbody style="text-align: center">  

                @foreach ($TypeUser as $type)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $type->user_id }}</td>
                    <td>{{ $type->type_user }}</td>
                    <td>
                        <a href="{{route('admin.typeuser.edit',['id' => $type->id])}}" class="btn btn-success">Sửa <i class="fa fa-pencil"></a>
                        <a href="{{route('admin.typeuser.destroy',['id' => $type->id])}}" onclick="return checkDelete('Bạn có muốn xóa Loại User này không?')" class="btn btn-danger">Xóa <i class="fa fa-close"></a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection