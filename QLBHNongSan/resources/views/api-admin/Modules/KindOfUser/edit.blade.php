@extends('api-admin.master')
@section('title','Sửa thông tin loại người dùng')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sửa thông tin loại người dùng</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.KindOfUser.update',['id' => $loainguoidung->id])}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Tên khách hàng</label>
                <input type="text" name="ten" class="form-control" placeholder="Tên người dùng" value="{{$loainguoidung->ten}}">
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <input type="text" name="mota" class="form-control" placeholder="Mô tả" value="{{$loainguoidung->mota}}">
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
    <!-- /.card-body -->

    <!-- /.card-footer-->
</div>

@endsection