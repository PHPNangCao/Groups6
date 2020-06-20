@extends('api-admin.master')
@section('title','Sửa loại sản phẩm')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sửa thể thoại</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('admin.group.update',['id' => $LoaiSanPham->id])}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Tên loại sản phẩm</label>
            <input type="text" name="ten" class="form-control" placeholder="Tên nhóm sản phẩm" value="{{$LoaiSanPham->ten}}">
            </div>
            <div class="form-group">
                <label>Mô tả</label>
            <textarea class="form-control" name="mota" rows="3" placeholder="Mô tả">{{$LoaiSanPham->mota}}</textarea>
            </div>
            <div class="form-group">
                <label>Ảnh</label>
            <input type="file" class="form-control-file" name="anh" value="{{$LoaiSanPham->anh}}" >
              </div>
              <div class="form-product">
                <label>Trạng thái</label>
                <td>
                    <br>
                    <input type="radio" name="trangthai" value="1" {{ ($LoaiSanPham->trangthai == 1 ) ? 'checked' : ''}} /> Bán
                    <br>
                    <input type="radio" name="trangthai" value="0" {{ ($LoaiSanPham->trangthai == 0 ) ? 'checked' : ''}}/> Ngừng Bán
                </td>              
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        
    </div>
    <!-- /.card-footer-->
</div>

@endsection