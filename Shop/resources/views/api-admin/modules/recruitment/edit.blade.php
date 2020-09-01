@extends('api-admin.master')
@section('title','Sửa bài Tuyển Dụng')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sửa bài tin</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.recruitment.update',['id' => $recruitment->id])}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                <label>Tiêu đề <span class="text-danger">(*)</label>
                <input type="text" name="title" class="form-control" value="{{$recruitment->title}}"  placeholder="Tiêu đề...">
                @if ($errors->has('title'))
                    <div class="text-danger">
                        {{$errors->first('title')}}
                    </div>
                @endif
            </div>            
            <div class="form-group">
                <label>Nội dung</label>
                <textarea class="form-control" name="description" rows="3" placeholder="Nội dung...">{{$recruitment->description}}</textarea>
                <script>
                    CKEDITOR.replace( 'description' );
                </script>
            </div>

                <hr>
                <a href="{{route('admin.recruitment.index')}}" class="btn btn-warning">Quay Lại</a>
                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</div>

@endsection