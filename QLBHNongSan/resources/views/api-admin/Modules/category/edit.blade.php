@extends('api-admin.master')
@section('title','Sửa loại sản phẩm')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sửa loại sản phẩm</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.category.update',['id' => $LoaiSanPham->id])}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                <label>Tên loại sản phẩm</label>
            <input type="text" name="ten" class="form-control" required placeholder="Tên loại sản phẩm" value="{{$LoaiSanPham->ten}}">
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <textarea class="form-control" name="mota" rows="3" required placeholder="Mô tả" >{{$LoaiSanPham->mota}}</textarea>
            </div>
            <div class="form-group">
                <label>Ảnh</label>
                <input type="file" class="form-control-file" required name="anh" value="{{$LoaiSanPham->anh}}">
            </div>

            <select name="trangthai" class="form-control" required>
                <option value="0">Hết Hàng</option>
                <option value="1">Còn Hàng</option>
            </select>

            <div class="form-group">
                <label>Nhóm sản phẩm</label>
                <select name="nhom_id" class="form-control" required>
                    <option >----Chọn nhóm sản phẩm----</option>
                @foreach ($NhomSanPham as $NhomSP)
                    <option value="{{$NhomSP->id}}" selected = "{{$LoaiSanPham->ten}}" >{{$NhomSP->ten}}</option>
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