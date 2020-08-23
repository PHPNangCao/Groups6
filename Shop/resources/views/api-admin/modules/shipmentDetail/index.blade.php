@extends('api-admin.master')
@section('title','Danh sách chi tiết lô hàng')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
        <a href="{{route('admin.shipmentdetail.create')}}" class="btn btn-info">Thêm thông tin chi tiết lo hàng</a>
        </h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead style="text-align: center">
                <tr>
                    <th>STT</th>
                    <th>Thông tin lô hàng</th>
                    <th>Thông tin sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Tình Trạng</th>
                    <th>Giá mua</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody style="text-align: center">
                @foreach ($shipmentdetail as $shipdetail)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{ $shipdetail->shipment->name }}</td>
                    <td>{{ $shipdetail->product->name }}</td>
                    <td>{{ $shipdetail->quantity }}</td>
                    <td>
                        @if ($shipment->status == 1)
                            <a href="{{route('admin.shipmentdetail.status',['id' => $shipmentdetail->id])}}" class="btn btn-app">Show</i></a>
                        @else
                            <a href="{{route('admin.shipmentdetail.status',['id' => $shipmentdetail->id])}}" class="btn btn-app">Hide</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('admin.shipmentdetail.edit',['id' => $shipdetail->id])}}" class="btn btn-success">Sửa <i class="fa fa-pencil"></a>
                        <a href="{{route('admin.shipmentdetail.destroy',['id' => $shipdetail->id])}}" onclick="return checkDelete('Bạn có muốn xóa loại sản phẩm này không?')" class="btn btn-danger">Xóa <i class="fa fa-close"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
