@extends('api-admin.master')
@section('title','Tạo đơn hàng')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tạo đơn hàng</button></h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.bill.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row">
                {{-- sản phẩm --}}
                <div class="col-md-7">
                    <div id="addproduct" class="row">

                        <div class="form-group col-md-8">
                            <label>Chọn sản phẩm<span class="text-danger">(*)</label>
                            <select name="product_id" class="form-control">
                                <option value="">----Chọn sản phẩm----</option>
                            @foreach ($product as $pro)
                                <option value="{{$pro->id}}">{{$pro->name}}</option>
                            @endforeach
                            </select>
                            @if ($errors->has('product_id'))
                                <div class="text-danger">
                                    {{$errors->first('product_id')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-md-2">
                            <label>Số lượng</label>
                            <input type="text" name="quantity" class="col-md-12" placeholder="kg">
                        </div>
                    
                        
                        <div class="form-group col-md-8">
                            <label>Chọn sản phẩm<span class="text-danger">(*)</label>
                            <select name="product_id" class="form-control">
                                <option value="">----Chọn sản phẩm----</option>
                            @foreach ($product as $pro)
                                <option value="{{$pro->id}}">{{$pro->name}}</option>
                            @endforeach
                            </select>
                            @if ($errors->has('product_id'))
                                <div class="text-danger">
                                    {{$errors->first('product_id')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-md-2">
                            <label>Số lượng</label>
                            <input type="text" name="quantity" class="col-md-12" placeholder="kg">
                        </div>
                        

                    </div>
                    
                </div>
                
                {{-- sản phẩm --}}

                {{-- khách hàng --}}
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Họ tên<span class="text-danger">(*)</label>
                        <input type="text" name="name" class="form-control"  placeholder="Họ tên">
                        @if ($errors->has('name'))
                            <div class="text-danger">
                                {{$errors->first('name')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Giới tính: </label>
                            <input type="radio" name="gender" value="0" checked="checked"><span>Nam </span>
                            <input type="radio" name="gender" value="1"><span>Nữ</span>      
                    </div>
                    <div class="form-group">
                        <label>Email<span class="text-danger">(*)</label>
                        <input type="text" name="email" class="form-control"   placeholder="Emai..">
                        @if ($errors->has('email'))
                            <div class="text-danger">
                                {{$errors->first('email')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ<span class="text-danger">(*)</label>
                        <input type="text" name="address" class="form-control"   placeholder="Địa chỉ...">
                        @if ($errors->has('address'))
                            <div class="text-danger">
                                {{$errors->first('address')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại<span class="text-danger">(*)</label>
                        <input type="text" name="phone" class="form-control"   placeholder="Số điện thoại...">
                        @if ($errors->has('phone'))
                            <div class="text-danger">
                                {{$errors->first('phone')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Ghi chú</label>
                        <textarea class="form-control" name="note" rows="3" placeholder="Ghi chú.."></textarea>
                    </div>
                    
                    <hr>
                    <div style="text-align: right">
                        <a href="{{route('admin.bill.index')}}" class="btn btn-warning">Quay Lại</a>
                        <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                    </div>
                    
                </div>
                {{-- khách hàng --}}
            </div>
        </form>
    </div>
</div>

@endsection