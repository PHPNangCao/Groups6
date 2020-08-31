@extends('api-admin.master')
@section('title','Danh sách đơn hàng')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead style="text-align: center">
                <tr>
                    <th>Tên người đặt</th>
                    <th>Tổng tiền</th>
                    <th>Tình trạng</th>
                    <th>Thao Tác</th>
                </tr>
            </thead> 
            <tbody style="text-align: center">   
                @foreach ($bills as $bills)
                <tr>
                    <td>{{$bills->customer->name}}</td>
                    <td>{{number_format($bills->total)}} VNĐ</td>
                    <td>
                        @if ($bills->status == 1)
                            <a href="{{route('admin.bill.status',['id' => $bills->id])}}" class="btn btn-success">Đang xử lý</i></a>
                        @else
                            <span>Đã giao hàng</span>
                        @endif

                    </td>
                    <td>
                    <a href="{{route('admin.bill.show',$bills->id)}}" class="btn btn-success">Chi tiết <i class="fa fa-pencil"></a>
                    </td>
                </tr>
                @endforeach              
            </tbody>
        </table>
    </div>
</div>

@endsection