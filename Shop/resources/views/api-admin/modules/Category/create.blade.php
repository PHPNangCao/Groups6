@extends('api-admin.master')
@section('title','Thêm loại sản phẩm')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thêm loại sản phẩm</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.category.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tên loại sản phẩm <span class="text-danger">(*)</label>
                    <input type="text" name="name" class="form-control"   placeholder="Tên loại sản phẩm">
                    @if ($errors->has('name'))
                        <div class="text-danger">
                            {{$errors->first('name')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea class="form-control" name="description" rows="3" placeholder="Mô tả"></textarea>
                    <script>
                        CKEDITOR.replace( 'description' );
                    </script>
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
                
                <hr>
                <a href="{{route('admin.category.index')}}" class="btn btn-warning">Quay Lại</a>
                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
            </div>
        </form>
    </div>
</div>

@endsection