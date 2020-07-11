@extends('api-admin.master')
@section('title','Sửa tin tuyển dụng')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sửa tin tuyển dụng</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('admin.recruitment.update',['id' => $tuyendung->id])}}" method="POST">
            @csrf
            <div class="form-product">
                <label >Tiêu đề</label>
                <input type="text" name="tieude" class="form-control" value="{{$tuyendung->tieude}}">
            </div>
            <div class="form-product">
                <label >URL</label>
                <input type="text" name="url" class="form-control" value="{{$tuyendung->url}}">
            </div>
            <div class="form-product">
                <label >Ảnh</label>
                <input type="file" name="anh" class="form-control-file" value="{{$tuyendung->anh}}">
            </div>
            <div class="form-product">
                <label >Mô tả</label>
                <textarea type="text" name="mota" class="form-control" >{{$tuyendung->mota}}</textarea>
            </div>
            <div class="form-product">
                <label >Liên hệ</label>
                <input type="text" name="trangthai" class="form-control" value="{{$tuyendung->lienhe}}">
            </div>
            <br>
            <div class="form-product">
                <label >Tình trạng</label>
                    <input type="radio" name="tinhtrang" value="1" {{  ($tuyendung->tinhtrang == 1 ? ' checked' : '') }}>Mở
                    <input type="radio" name="tinhtrang" value="0" {{  ($tuyendung->tinhtrang == 0 ? ' checked' : '') }}>Ẩn
            </div>
            
            <br>
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>    
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->
</div>
@endsection