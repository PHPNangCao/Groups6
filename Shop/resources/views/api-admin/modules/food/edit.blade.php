@extends('api-admin.master')
@section('title','Sửa bài viết')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sửa bài viết</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.food.update',['id' => $food->id])}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                <label>Tiêu đề <span class="text-danger">(*)</label>
                <input type="text" name="title" class="form-control" value="{{$food->title}}"  placeholder="Tiêu đề...">
                @if ($errors->has('title'))
                    <div class="text-danger">
                        {{$errors->first('title')}}
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Ghi Chú</label>
                        <textarea class="form-control" name="note" rows="3" placeholder="Ghi Chú...">{{$food->note}}</textarea>
                        <script>
                            CKEDITOR.replace( 'note' );
                        </script>
                    </div>       
                </div>      
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea class="form-control" name="content" rows="3" placeholder="Nội dung...">{{$food->content}}</textarea>
                        <script>
                            CKEDITOR.replace( 'content' );
                        </script>
                    </div>
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
                <input type="hidden" name="image_hidden" value="{{$food->image}}">
                    <div class="col-md-12">
                            <div class="form-group">
                                <label>Ảnh đã lưu</label>
                                <a href="#" class="thumbnail">
                                    <img src="upload/food/{{$food->image}}" alt="" height="100px">
                                </a>
                            </div>
                    </div>
                </div>   
            </div>           
            <input type="hidden" name="status" value="{{$food->status}}">     
        </div>
                <hr>
                <a href="{{route('admin.food.index')}}" class="btn btn-warning">Quay Lại</a>
                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</div>

@endsection