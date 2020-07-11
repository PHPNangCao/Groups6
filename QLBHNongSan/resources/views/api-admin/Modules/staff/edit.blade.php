@extends('api-admin.master')
@section('title','Sửa thông tin nhân viên')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sửa thông tin nhân viên</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.staff.update',['id' => $nv->id])}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Tên nhân viên</label>
                <input type="text" name="ten" class="form-control" placeholder="Tên nhân viên" value="{{$nv->ten}}">
            </div>
            <div class="form-group">
                <label>CMND</label>
                <input type="text" name="cmnd" class="form-control" placeholder="cmnd" value="{{$nv->cmnd}}">
            </div>
            <div class="form-group">
                <label>Số điện thoại </label>
                <input type="text" name="sdt" class="form-control" placeholder="Số điện thoại" value="{{$nv->sdt}}">
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <input type="text" name="diachi" class="form-control" placeholder="Địa Chỉ" value="{{$nv->diachi}}">
            </div>
            <div class="form-group">
                <label>Mật Khẩu</label>
                <input type="text" name="user_id" class="form-control" value="{{$nv->matkhau}}">
            </div>
            <hr>
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