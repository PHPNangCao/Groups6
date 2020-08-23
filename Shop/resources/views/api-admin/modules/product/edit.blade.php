@extends('api-admin.master')
@section('title','Sửa sản phẩm')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sửa sản phẩm</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.product.update',['id' => $product->id])}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tên sản phẩm <span class="text-danger">(*)</label>
                        <input type="text" name="name" class="form-control"   placeholder="Tên loại sản phẩm" value="{{$product->name}}">
                        @if ($errors->has('name'))
                            <div class="text-danger">
                                {{$errors->first('name')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Loại sản phẩm <span class="text-danger">(*)</label>
                        <select name="category_id" class="form-control">
                            <option value="">----Chọn loại sản phẩm----</option>
                        @foreach ($category as $cate)
                            <option value="{{$cate->id}}" selected = "{{$product->category_id}}">{{$cate->name}}</option>
                        @endforeach
                        </select>
                        @if ($errors->has('category_id'))
                            <div class="text-danger">
                                {{$errors->first('category_id')}}
                            </div>
                        @endif
                    </div>
    
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea class="form-control" name="description" rows="3" placeholder="Mô tả">{{$product->description}}</textarea>
                        <script>
                            CKEDITOR.replace( 'description' );
                        </script>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>Giá bán<span class="text-danger">(*)</label>
                        <input type="text" class="form-control"  name="unit_price" value="{{$product->unit_price}}">
                        @if ($errors->has('unit_price'))
                            <div class="text-danger">
                                {{$errors->first('unit_price')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Giá khuyến mãi<span class="text-danger">(*)</label>
                        <input type="text" class="form-control" name="promotion_price" value="{{$product->promotion_price}}">
                        @if ($errors->has('promotion_price'))
                            <div class="text-danger">
                                {{$errors->first('promotion_price')}}
                            </div>
                        @endif
                    </div>
    
                    <div class="form-group">
                        <label>Đơn vị tính<span class="text-danger">(*)</label>
                        <select name="unit" class="form-control">
                        <option value="kg" selected = "{{$product->unit}}">Kg</option>
                            <option value="g" selected = "{{$product->unit}}">g</option>
                        </select>
                        @if ($errors->has('category_id'))
                            <div class="text-danger">
                                {{$errors->first('category_id')}}
                            </div>
                        @endif
                    </div>
    
                    <div class="form-group">
                        <label>Ảnh <span class="text-danger">(*)</label>
                        <input type="file" class="form-control-file"   name="image">
                        @if ($errors->has('image'))
                            <div class="text-danger">
                                {{$errors->first('image')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Ảnh đã lưu</label>
                        <a href="#" class="thumbnail">
                            <img src="upload/product/{{$product->image}}" alt="" height="100px">
                        </a>
                    </div>
                </div>  

                <input type="hidden" name="hot" value="{{$product->status}}">
                <input type="hidden" name="status" value="{{$product->status}}">
                <input type="hidden" name="image_hidden" value="{{$product->image}}">

                <hr>
            </div>

            <a href="{{route('admin.product.index')}}" class="btn btn-warning">Quay Lại</a>
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</div>

@endsection