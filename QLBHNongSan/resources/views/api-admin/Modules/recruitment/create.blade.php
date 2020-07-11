@extends('api-admin.master')
@section('title','Thêm tin tuyển dụng')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tạo tin tuyển dụng</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('admin.recruitment.store')}}" method="POST">
            @csrf
            <div class="form-product">
                <label >Tiêu đề</label>
                <input type="text" name="tieude" class="form-control" placeholder="Nhập tiêu đề">
            </div>
            <div class="form-product">
                <label >URL</label>
                <input type="text" name="url" class="form-control">
            </div>
            <div class="form-product">
                <label >Ảnh</label>
                <input type="file" name="anh" class="form-control">
            </div>
            <div class="form-product">
                <label >Mô tả</label>
                <textarea type="text" name="mota" class="form-control" placeholder="Nhập mô tả"></textarea>
            </div>
            <div class="form-product">
                <label >Liên hệ</label>
                <input type="text" name="lienhe" class="form-control">
            </div>
            <br>
            <div class="form-product">
                <label >Tình trạng</label>
                    <input type="radio" name="tinhtrang" value="0"  >Mở
                    <input type="radio" name="tinhtrang" value="1"  >Ẩn
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
