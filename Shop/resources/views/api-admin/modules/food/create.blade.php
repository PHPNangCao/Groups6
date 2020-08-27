@extends('api-admin.master')
@section('title','Thêm bài viết')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thêm bài viết</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.food.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                <label>Tiêu đề <span class="text-danger">(*)</label>
                <input type="text" name="title" class="form-control"   placeholder="Tiêu đề...">
                @if ($errors->has('title'))
                    <div class="text-danger">
                        {{$errors->first('title')}}
                    </div>
                @endif
            </div>
            <div class="row">
            <div class="col-md-6">
                {{-- <div class="form-group">
                    <label>Ghi chú</label>
                    <input type="text" name="note" class="form-control"   placeholder="Ghi Chú...">
                    @if ($errors->has('note'))
                        <div class="text-danger">
                            {{$errors->first('note')}}
                        </div>
                    @endif
                </div> --}}
                <div class="form-group">
                    <label>Ghi chú</label>
                    <textarea class="form-control" name="note" placeholder="Ghi Chú..."></textarea>
                    <script>
                        CKEDITOR.replace( 'note' );
                    </script>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea class="form-control" name="content" rows="3" placeholder="Nội dung..."></textarea>
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
                
            </div>
            <hr>
            <a href="{{route('admin.food.index')}}" class="btn btn-warning">Quay Lại</a>
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </div>           
        </form>
    </div>
</div>

@endsection