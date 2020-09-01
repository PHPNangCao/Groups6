@extends('api-admin.master')
@section('title','Chi tiết đơn hàng') 
@section('content')
<!-- Default box -->
<a href="{{route('admin.bill.index')}}" class="btn btn-warning">Quay Lại</a>
    <div class="card-body">
        <table class="table table-bordered" >
            <thead style="text-align: center">
                <div style="text-align: center;"><strong>KHÁCH HÀNG</strong></div>
                <tr>
                    <th>Tên người đặt</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                </tr>
            </thead> 
            <tbody style="text-align: center">   
                @foreach ($bills as $bills)
                <tr>
                    <td>{{$bills->customer->name}}</td>
                    <td>{{$bills->customer->phone}}</td>
                    <td>{{$bills->customer->address}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <hr>
    <div class="card-body">
        <table class="table table-bordered" >
            <thead style="text-align: center">
                <div style="text-align: center;"><strong>CHI TIẾT ĐƠN HÀNG</strong></div>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Ngày đặt</th>
                </tr>
            </thead> 
            <tbody style="text-align: center">   
                @foreach ($billDetail as $detail)
                <tr>
                    <td>{{$detail->product->name}}</td>
                    <td>{{$detail->quantity}}</td>
                    <td>{{number_format($detail->unit_price)}} VNĐ</td>
                    <td>{{$detail->created_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <hr>
    {{-- <div class="row">
        <div class="col-md-4 pull-left">
            
                <label>TÌNH TRẠNG ĐƠN HÀNG:</label>
    
            </div>
        </div> 
    </div> --}}

@endsection