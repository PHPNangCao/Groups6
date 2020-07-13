@extends('api-admin.master')
@section('title','Thêm loại sản phẩm')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thêm loại sản phẩm</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.category.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                <label>Tên loại sản phẩm</label>
                <input type="text" name="ten" class="form-control" required placeholder="Tên loại sản phẩm">
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <textarea class="form-control" name="mota" rows="3" required placeholder="Mô tả"></textarea>
            </div>
            <div class="form-group">
                <label>Ảnh</label>
                <input type="file" class="form-control-file" required name="anh">
            </div>
            
            <div class="form-group">
                <label>Nhóm sản phẩm</label>
                <select name="nhom_id" class="form-control">
                <option >----Chọn nhóm sản phẩm----</option>
                @foreach ($NhomSanPham as $NhomSP)
                    <option value="{{$NhomSP->id}}">{{$NhomSP->ten}}</option>
                @endforeach
                </select>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
    </div>
    <!-- /.card-footer-->
</div>

@endsection