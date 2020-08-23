@extends('api-admin.master')
@section('title','Thêm tin tức')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thêm tin tức</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.news.update',['id' => $news->id])}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea class="form-control" name="content" rows="3" placeholder="Nội dung...">{{$news->content}}</textarea>
                        <script>
                            CKEDITOR.replace( 'content' );
                        </script>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Tiêu đề <span class="text-danger">(*)</label>
                        <input type="text" name="title" class="form-control" value="{{$news->title}}"  placeholder="Tiêu đề...">
                        @if ($errors->has('title'))
                            <div class="text-danger">
                                {{$errors->first('title')}}
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
                    <input type="hidden" name="image_hidden" value="{{$news->image}}">
                    <div class="form-group">
                        <div class="col-md-4">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Ảnh đã lưu</label>
                                    <a href="#" class="thumbnail">
                                        <img src="upload/news/{{$news->image}}" alt="" height="100px">
                                    </a>
                                </div>
                            </div>
                        </div> 
                    </div>  
                </div>          
            </div>
                <hr>
                <a href="{{route('admin.news.index')}}" class="btn btn-warning">Quay Lại</a>
                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</div>

@endsection