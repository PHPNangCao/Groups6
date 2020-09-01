@extends('api-admin.master')
@section('title','Sửa bình luận')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sửa bình luận</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.comment.update',['id' => $comment->id])}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tên khách hàng <span class="text-danger"></label>
                    <input type="text" name="name" class="form-control" value="{{$comment->name}}">
                    </div>

                    <div class="form-group">
                        <label>Số điện thoại<span class="text-danger"></label>
                    <input type="text" name="phone" class="form-control" value="{{$comment->phone}}">
                    </div>

                    <div class="form-group">
                        <label>Đánh giá của khách</label>
                        <textarea class="form-control" name="description" >{{$comment->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection