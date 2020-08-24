@extends('api-admin.master')
@section('title','Danh sách khách hàng')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
        <a href="{{route('admin.customer.create')}}" class="btn btn-info">Thêm Khách hàng</a>
        </h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead style="text-align: center">
                <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Giới Tính</th>
                    <th>Email</th>
                    <th>Địa Chỉ</th>
                    <th>SĐT</th>
                    <th>NOTE</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody style="text-align: center">
                @foreach ($customer as $cus)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{ $cus->name }}</td>
                    <td>{{ $cus->gender }}</td>
                    <td>{{ $cus->email }}</td>
                    <td>{{ $cus->address }}</td>
                    <td>{{ $cus->phone }}</td>
                    <td>{{ $cus->note }}</td>
                    <td>
                        <a href="{{route('admin.customer.edit',['id' => $cus->id])}}" class="btn btn-success">Sửa <i class="fa fa-pencil"></a>
                        <a href="{{route('admin.customer.destroy',['id' => $cus->id])}}" onclick="return checkDelete('Bạn có muốn xóa sản phẩm này không?')" class="btn btn-danger">Xóa <i class="fa fa-close"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
