@extends('api-admin.master')
@section('title','Sửa nhóm sản phẩm')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sửa nhóm sản phẩm</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('admin.group.update',['id' => $NhomSanPham->id])}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Tên nhóm sản phẩm</label>
            <input type="text" name="ten" class="form-control" placeholder="Tên nhóm sản phẩm" value="{{$NhomSanPham->ten}}">
            </div>
            <div class="form-group">
                <label>Mô tả</label>
            <textarea class="form-control" name="mota" rows="3" placeholder="Mô tả">{{$NhomSanPham->mota}}</textarea>
            </div>
            <div class="form-group">
                <label>Ảnh</label>

            <input type="file" class="form-control-file" name="anh" value="{{$NhomSanPham->anh}}" >
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