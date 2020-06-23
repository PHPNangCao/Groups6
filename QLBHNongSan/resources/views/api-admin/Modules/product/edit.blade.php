@extends('api-admin.master')
@section('title','Sửa thông tin sản phẩm')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sửa thông tin sản phẩm</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('admin.group.update',['id' => $SanPham->id])}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Tên sản phẩm</label>
            <input type="text" name="ten" class="form-control" placeholder="Tên nhóm sản phẩm" value="{{$SanPham->ten}}">
            </div>
            <div class="form-group">
                <label>Mô tả</label>
            <textarea class="form-control" name="mota" rows="3" placeholder="Mô tả">{{$SanPham->mota}}</textarea>
            </div>
            <div class="form-group">
                <label>Ảnh</label>
            <input type="file" class="form-control-file" name="anh" value="{{$SanPham->anh}}" >
              </div>

              <div class="form-group">
                <label>Đơn vị tính</label>
                <select name="donvitinh_id" class="form-control">
                <option >----Chọn đơn vị tính----</option>
                @foreach ($DonViTinh as $DVT)
                    <option value="{{$DVT->id}}">{{$DVT->ten}}</option>
                @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Loại sản phẩm</label>
                <select name="loaisanpham_id" class="form-control">
                <option >----Chọn loại sản phẩm----</option>
                @foreach ($LoaiSanPham as $LoaiSP)
                    <option value="{{$LoaiSP->id}}">{{$LoaiSP->ten}}</option>
                @endforeach
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