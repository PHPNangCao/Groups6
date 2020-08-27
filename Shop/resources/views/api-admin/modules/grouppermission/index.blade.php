@extends('api-admin.master')
@section('title','Danh sách Các Phân Quyền')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
        <a href="{{route('admin.grouppermission.create')}}" class="btn btn-info">Thêm Nhóm Phân Quyền</a>
        </h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead style="text-align: center">
                <tr>
                    <th>STT</th>
                    <th>Nhóm Quyền</th>
                    <th>Mô Tả</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody style="text-align: center">
                @foreach ($group_permission as $gr)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{ $gr->name }}</td>
                    <td>{{$gr->description}}</td>
                    <td>
                        <a href="{{route('admin.grouppermission.edit',['id' => $gr->id])}}" class="btn btn-success">Sửa <i class="fa fa-pencil"></a>
                        <a href="{{route('admin.grouppermission.destroy',['id' => $gr->id])}}" onclick="return checkDelete('Bạn có muốn xóa Gr Phân Quyền này không?')" class="btn btn-danger">Xóa <i class="fa fa-close"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
