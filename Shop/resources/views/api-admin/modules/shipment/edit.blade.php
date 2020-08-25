@extends('api-admin.master')
@section('title','Sửa thông tin lô hàng')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thêm Lô Hàng</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.shipment.update',['id' => $shipment->id])}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label>Chọn nhà cung cấp<span class="text-danger">(*)</label>
                    <select name="supplier_id" class="form-control">
                        <option >----Chọn Nhà Cung Cấp----</option>
                            @foreach ($supplier as $sup)
                                <option value="{{$sup->id}}" selected = {{$shipment->suplier_id}}>{{$sup->name}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Tổng Cộng<span class="text-danger">(*)</label>
                    <input type="text" name="total" class="form-control"  value="{{$shipment->total}}" placeholder="Tổng Lô Hàng">
                    @if ($errors->has('total'))
                        <div class="text-danger">
                            {{$errors->first('total')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Số Lượng<span class="text-danger">(*)</label>
                    <input type="text" name="quantity" class="form-control"  value="{{$shipment->quantity}}" placeholder="Số Lượng">
                    @if ($errors->has('quantity'))
                        <div class="text-danger">
                            {{$errors->first('quantity')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Ghi chú</label>
                    <<input type="text" name="note" class="form-control"  value="{{$shipment->note}}" placeholder="NOTE">
                </div>
                <hr>
                <a href="{{route('admin.shipment.index')}}" class="btn btn-warning">Quay Lại</a>
                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
            </div>
        </form>
    </div>
</div>

@endsection
