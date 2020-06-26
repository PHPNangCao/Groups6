@extends('api-admin.master')
@section('title','Thêm thông tin khuyến mãi')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thêm thông tin khuyến mãi</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('admin.sale.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Tiêu Đề</label>
                <input type="text" class="form-control-file" name="tieude">
            </div>
            <div class="form-group">
                <label>Nội Dung</label>
                <textarea class="form-control" name="noidung" rows="3" placeholder="noidung"></textarea>
            </div>
            <div class="form-group">
                <label>Ảnh</label>
                <input type="file" class="form-control-file" name="anh">
            </div>
            <div class="form-group">
                <label>Trạng Thái</label>
                <input type="checkbox" name="tinhtrang" value="1"/>ON
                <input type="checkbox" name="tinhtrang" value="1"/>OFF
            </div>
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