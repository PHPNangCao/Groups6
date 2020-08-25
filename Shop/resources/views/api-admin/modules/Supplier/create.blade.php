@extends('api-admin.master')
@section('title','Thêm nhà cung cấp')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thêm nhà cung cấp</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.supplier.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tên nhà cung cấp<span class="text-danger">(*)</label>
                    <input type="text" name="name" class="form-control"   placeholder="Tên loại sản phẩm">
                    @if ($errors->has('name'))
                        <div class="text-danger">
                            {{$errors->first('name')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Email<span class="text-danger">(*)</label>
                    <input type="email" name="email" class="form-control"   placeholder="Email...">
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
                    <input type="text" name="phone" class="form-control"   placeholder="Địa chỉ...">
                    @if ($errors->has('phone'))
                        <div class="text-danger">
                            {{$errors->first('phone')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Ghi Chú</label>
                    <textarea class="form-control" name="note" rows="3" placeholder="Mô tả"></textarea>
                    <script>
                        CKEDITOR.replace( 'note' );
                    </script>
                </div>
                <hr>
                <a href="{{route('admin.supplier.index')}}" class="btn btn-warning">Quay Lại</a>
                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
            </div>
        </form>
    </div>
</div>

@endsection