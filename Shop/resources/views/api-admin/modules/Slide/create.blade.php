@extends('api-admin.master')
@section('title','Thêm Slide')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thêm Slide</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.slide.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label>Đường dẫn Slide</label>
                    <input type="text" name="slug" class="form-control"  placeholder="URL">
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
                <a href="{{route('admin.slide.index')}}" class="btn btn-warning">Quay Lại</a>
                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
            </div>
        </form>
    </div>
</div>

@endsection