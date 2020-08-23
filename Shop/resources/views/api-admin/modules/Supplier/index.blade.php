@extends('api-admin.master')
@section('title','Danh sách nhà cung cấp')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
        <a href="{{route('admin.supplier.create')}}" class="btn btn-info">Thêm nhà cung cấp</a>
        </h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead style="text-align: center">
                <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>SĐT</th>
                    <th>Ghi Chú</th>
                    <th>Thao Tác</th>
                </tr>
            </thead> 
            <tbody style="text-align: center">
                @foreach ($supplier as $sup)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{ $sup->name }}</td>
                    <td>{{ $sup->email }}</td>
                    <td>{{ $sup->address }}</td>
                    <td>{{ $sup->phone }}</td>
                    <td>{{ $sup->note }}</td>
                    <td>
                        <a href="{{route('admin.supplier.edit',['id' => $sup->id])}}" class="btn btn-success">Sửa <i class="fa fa-pencil"></a>
                        <a href="{{route('admin.supplier.destroy',['id' => $sup->id])}}" onclick="return checkDelete('Bạn có muốn xóa loại sản phẩm này không?')" class="btn btn-danger">Xóa <i class="fa fa-close"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection