@extends('api-admin.master')
@section('title','Danh sách các lô hàng')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
        <a href="{{route('admin.shipment.create')}}" class="btn btn-info">Thêm lô hàng</a>
        </h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead style="text-align: center">
                <tr>
                    <th>STT</th>
                    <th>Mã Nhà Cung Cấp</th>
                    <th>Tổng Cộng</th>
                    <th>Số lượng</th>
                    <th>Trạng thái</th>
                    <th>Ghi Chú</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody style="text-align: center">
                @foreach ($shipment as $ship)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{ $ship->supplier->name }}</td>
                    <td>{{ $ship->total }}</td>
                    <td>{{ $ship->quantity }}</td>
                    <td>
                        @if ($ship->status == 1)
                            <a href="{{route('admin.shipment.status',['id' => $ship->id])}}" class="btn btn-app">Show</i></a>
                        @else
                            <a href="{{route('admin.shipment.status',['id' => $ship->id])}}" class="btn btn-app">Hide</a>
                        @endif
                    </td>
                    <td>{{ $ship->note }}</td>
                    <td>
                        <a href="{{route('admin.shipment.edit',['id' => $ship->id])}}" class="btn btn-success">Sửa <i class="fa fa-pencil"></a>
                        <a href="{{route('admin.shipment.destroy',['id' => $ship->id])}}" onclick="return checkDelete('Bạn có muốn xóa loại sản phẩm này không?')" class="btn btn-danger">Xóa <i class="fa fa-close"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
