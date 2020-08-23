@extends('api-admin.master')
@section('title','Thêm nhà cung cấp')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thêm nhà cung cấp</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.supplier.update',['id' => $supplier->id])}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tên nhà cung cấp<span class="text-danger">(*)</label>
                    <input type="text" name="name" class="form-control"  value="{{$supplier->name}}" placeholder="Tên loại sản phẩm..">
                    @if ($errors->has('name'))
                        <div class="text-danger">
                            {{$errors->first('name')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Email<span class="text-danger">(*)</label>
                    <input type="text" name="email" class="form-control" value="{{$supplier->email}}"  placeholder="Email..." >
                    @if ($errors->has('email'))
                        <div class="text-danger">
                            {{$errors->first('email')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Địa chỉ<span class="text-danger">(*)</label>
                    <input type="text" name="address" class="form-control" value="{{$supplier->address}}"  placeholder="Địa chỉ...">
                    @if ($errors->has('address'))
                        <div class="text-danger">
                            {{$errors->first('address')}}
                        </div>
                    @endif
                </div>
                
                <div class="form-group">
                    <label>Số điện thoại<span class="text-danger">(*)</label>
                    <input type="text" name="phone" class="form-control"  value="{{$supplier->phone}}" placeholder="Địa chỉ...">
                    @if ($errors->has('phone'))
                        <div class="text-danger">
                            {{$errors->first('phone')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Ghi chú</label>
                    <input type="text" name="note" class="form-control" value="{{$supplier->note}}"  placeholder="Ghi chú...">
                </div>
                <hr>
                <a href="{{route('admin.supplier.index')}}" class="btn btn-warning">Quay Lại</a>
                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
            </div>
        </form>
    </div>
</div>

@endsection