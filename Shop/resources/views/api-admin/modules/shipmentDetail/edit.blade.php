@extends('api-admin.master')
@section('title','Thêm Lo Hàng Mới')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thêm chi tiết Lô Hàng</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.shipmentdetail.update',['id' => $shipment->id])}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label>Chọn nhà cung cấp<span class="text-danger">(*)</label>
                    <select name="supplier_id" class="form-control">
                        <option >----Chọn Lô hàng----</option>
                            @foreach ($shipment as $ship)
                                <option value="{{$ship->id}}" selected ={{$shipdetail->shipment_id}}>{{$ship->shipment_id}}</option>
                            @endforeach
                    </select>
                    @if ($errors->has('total'))
                        <div class="text-danger">
                            {{$errors->first('total')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Chọn sản phẩm<span class="text-danger">(*)</label>
                        <select name="supplier_id" class="form-control">
                            <option >----Chọn sản phẩm----</option>
                                @foreach ($product as $pro)
                                    <option value="{{$pro->id}} selected ={{$shipdetail->product_id}}">{{$pro->name}}</option>
                                @endforeach
                        </select>
                    @if ($errors->has('total'))
                        <div class="text-danger">
                            {{$errors->first('total')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Số Lượng<span class="text-danger">(*)</label>
                    <input type="text" name="quantity" class="form-control"  value="{{$shipmentDetail->quantity}}" placeholder="Nhập số lượng">
                    @if ($errors->has('quantity'))
                        <div class="text-danger">
                            {{$errors->first('quantity')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Giá thu vào</label>
                    <input type="text" name="purchase_price" class="form-control"  value="{{$shipmentDetail->purchase_price}}" placeholder="purchase_price...">
                    @if ($errors->has('quantity'))
                        <div class="text-danger">
                            {{$errors->first('quantity')}}
                        </div>
                    @endif
                </div>
                <hr>
                <a href="{{route('admin.shipmentdetail.index')}}" class="btn btn-warning">Quay Lại</a>
                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
            </div>
        </form>
    </div>
</div>

@endsection
