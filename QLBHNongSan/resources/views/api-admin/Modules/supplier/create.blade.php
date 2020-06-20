@extends('api-admin.master')
@section('title','Thêm nhà cung cấp')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thêm nhà cung cấp</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('admin.supplier.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Tên nhà cung cấp</label>
                <input type="text" name="ten" class="form-control" placeholder="Tên nhà cung cấp">
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <input type="text" name="diachi" class="form-control" placeholder="Địa chỉ">
            </div>
            <div class="form-group">
                <label>Số điện thoại</label>
                <input type="text" name="sdt" class="form-control" placeholder="Số điện thoại">
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