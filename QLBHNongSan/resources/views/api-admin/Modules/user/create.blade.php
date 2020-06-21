@extends('api-admin.master')
@section('title','Thêm người dùng')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thêm người dùng</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('admin.user.store')}}" method="POST">
            @csrf
            <div class="form-product">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Tên email hoặc người dùng">
            </div>
            <div class="form-product">
                <label>Mật khẩu</label>
                <input type="text" class="form-control" name="pass" placeholder="Nhập mật khẩu">
            </div>
            <div class="form-product">
                <label>Loại người dùng</label>
                <select name="loainguoidung_id" class="form-control">
                    @foreach($loainguoidung as $lnd)
                    <option value="{{ $lnd->id }}">{{ $lnd->ten }}</option>
                    @endforeach
                </select>
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