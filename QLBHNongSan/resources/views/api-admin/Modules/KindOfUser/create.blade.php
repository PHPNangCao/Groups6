@extends('api-admin.master')
@section('title','Thêm loại người dùng')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thêm thông tin loại người dùng</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.KindOfUser.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Tên Loại Người Dùng</label>
                <input type="text" name="ten" class="form-control" placeholder="Tên Loại Người Dùng">
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <input type="text" name="mota" class="form-control" placeholder="Mô tả">
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>

</div>

@endsection