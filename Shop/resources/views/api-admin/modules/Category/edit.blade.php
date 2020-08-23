@extends('api-admin.master')
@section('title','Sửa loại sản phẩm')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sửa loại sản phẩm</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.category.update',['id' => $category->id])}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tên loại sản phẩm <span class="text-danger">(*)</label>
                    <input type="text" name="name" class="form-control" placeholder="Tên loại sản phẩm" value="{{$category->name}}">
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea class="form-control" name="description" rows="3" placeholder="Mô tả" >{{$category->description}}</textarea>
                        <script>
                            CKEDITOR.replace( 'description' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label>Ảnh <span class="text-danger">(*)</label>
                        <input type="hidden" name="status" value="{{$category->status}}">
                        <input type="hidden" name="image_hidden" value="{{$category->image}}">
                        <input type="file" class="form-control-file" name="image">
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                </div>

                <div class="col-md-4">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Ảnh đã lưu</label>
                            <a href="#" class="thumbnail">
                                <img src="upload/category/{{$category->image}}" alt="" height="100px">
                            </a>
                        </div>
                    </div>
                </div> 
            </div>
        </form>
    </div>
</div>

@endsection